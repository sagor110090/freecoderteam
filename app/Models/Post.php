<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use RyanChandler\Comments\Concerns\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use  HasFactory;

    public $timestamps = true;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'visitor',
        'published_at',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    // casts
    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];



    //category many to many relationship
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_category');
    }

    //tags many to many relationship
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }


    //scope
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', 1);
    }

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }



    // booted
    protected static function booted()
    {
        static::creating(function ($post) {
            $post->user_id = auth()->id();

        });

        if (!auth()->check()) {
            //global scope
            static::addGlobalScope('published', function ($query) {
                $query->where('published_at', '<=', now());
            });

            //active scope
            static::addGlobalScope('active', function ($query) {
                $query->where('is_active', 1);
            });
        }





    }
}
