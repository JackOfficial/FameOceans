<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['author', 'category'])
                     ->orderBy('created_at', 'desc')
                     ->paginate(10);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published,scheduled',
            'published_at' => 'nullable|date',
        ]);

        $post = new Post();
        $post->user_id = auth()->id();
        $post->blog_category_id = $request->blog_category_id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            $post->featured_image = $request->file('featured_image')->store('posts', 'public');
        }

        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->status = $request->status;
        $post->published_at = $request->published_at;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = BlogCategory::all();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'blog_category_id' => 'nullable|exists:blog_categories,id',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:2048',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'status' => 'required|in:draft,published,scheduled',
            'published_at' => 'nullable|date',
        ]);

        $post = Post::findOrFail($id);
        $post->blog_category_id = $request->blog_category_id;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;

        // Handle featured image
        if ($request->hasFile('featured_image')) {
            // Optionally delete old image
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $post->featured_image = $request->file('featured_image')->store('posts', 'public');
        }

        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->status = $request->status;
        $post->published_at = $request->published_at;
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage (soft delete).
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post moved to trash.');
    }

    /**
     * Display trashed posts.
     */
    public function trash()
    {
        $posts = Post::onlyTrashed()->with(['author','category'])->paginate(10);
        return view('admin.posts.trash', compact('posts'));
    }

    /**
     * Restore a soft-deleted post.
     */
    public function restore($id)
    {
        Post::onlyTrashed()->findOrFail($id)->restore();
        return back()->with('success', 'Post restored successfully.');
    }

    /**
     * Permanently delete a post.
     */
    public function forceDelete($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        // Delete featured image from storage
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->forceDelete();

        return back()->with('success', 'Post permanently deleted.');
    }
}