<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blog_category_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'meta_title',
        'meta_description',
        'status',
        'published_at',
        'views',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /* =====================
     |  Relationships
     |===================== */

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /* =====================
     |  Scopes
     |===================== */

    public function scopePublished($query)
    {
        return $query
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /* =====================
     |  Helpers
     |===================== */

      public function isPublished(): bool
    {
        return $this->status === 'published'
            && $this->published_at?->isPast();
    }

    protected static function booted()
{
    static::creating(function ($post) {
        // 1. Generate Unique Slug efficiently
        $slug = Str::slug($post->title);
        $original = $slug;
        $count = 1;
        
        while (static::whereSlug($slug)->exists()) {
            $slug = "{$original}-" . $count++;
        }
        $post->slug = $slug;

        // 2. Automatic SEO
        $post->meta_title = $post->title;
        $post->meta_description = Str::limit(strip_tags($post->content), 160);
    });
}

}
