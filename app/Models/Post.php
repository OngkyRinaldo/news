<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'descriptions',
        'content',
        'author',
        'image'
    ];

    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('title', 'like', '%' . request('search'). '%')
                    ->orwhere('content', 'like', '%' . request('search'). '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function post_author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
