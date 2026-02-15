@extends('admin.layouts.app')

@section('title', 'Edit Post')

@section('content')
<section class="content">
    <div class="container-fluid">

        <div class="card card-primary">
            <div class="card-body">

                <form action="{{ route('admin.posts.update', $post) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <div class="form-group mb-3">
                        <label>Title *</label>
                        <input type="text"
                               name="title"
                               class="form-control @error('title') is-invalid @enderror"
                               value="{{ old('title', $post->title) }}"
                               required>

                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div class="form-group mb-3">
                        <label>Category</label>
                        <select name="blog_category_id" class="form-control">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('blog_category_id', $post->blog_category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Current Featured Image --}}
                    @if($post->featured_image)
                        <div class="mb-2">
                            <label>Current Image</label><br>
                            <img src="{{ asset('storage/'.$post->featured_image) }}"
                                 class="img-thumbnail"
                                 width="120">
                        </div>
                    @endif

                    {{-- Upload New Image --}}
                    <div class="form-group mb-3">
                        <label>Change Featured Image</label>
                        <input type="file" name="featured_image" class="form-control-file">

                        @error('featured_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Content --}}
                    <div class="form-group mb-3">
                        <label>Content *</label>
                        <textarea id="editor"
                                  name="content"
                                  class="form-control @error('content') is-invalid @enderror"
                                  rows="10"
                                  required>{{ old('content', $post->content) }}</textarea>

                        @error('content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="text-right">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save"></i> Update Post
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</section>

{{-- TinyMCE --}}
<script src="https://cdn.tiny.cloud/1/akrlpx2p28jit8egdeyeyu4q0osghccndfvgksphc8hfni44/tinymce/8/tinymce.min.js"></script>

<script>
tinymce.init({
    selector: '#editor',
    height: 400,
    plugins: 'lists link image table code',
    toolbar: 'undo redo | bold italic underline | bullist numlist | link image table | code'
});
</script>

@endsection