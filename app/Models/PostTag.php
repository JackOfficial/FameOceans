<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    // Table name (optional if it follows Laravel convention 'post_tag')
    protected $table = 'post_tag';

    // No timestamps if the pivot table doesn't have created_at/updated_at
    public $timestamps = false;

    // Fillable fields if you want to mass assign
    protected $fillable = [
        'post_id',
        'tag_id',
    ];

    // Relationships

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}