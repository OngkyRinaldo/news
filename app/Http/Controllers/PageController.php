<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::query()
            ->latest()
            ->paginate(5);
        
        return view('index', compact('posts'));
    }

    public function allCategory()
    {
        $categories = Category::orderBy('title', 'asc')
            ->get();

        
        return view('pages.categories', compact('categories'));
    }

    public function categories(Category $category)
    {
        $posts = Post::query()
            ->where('category_id', $category->id)
            ->get();

        return view('pages.category', compact('posts', 'category'));
    }

    public function allTags()
    {
        $tags = Tag::orderBy('title', 'asc')
            ->get();
        
   
            
        return view('pages.tags', compact('tags'));
    }

    public function tags(Tag $tag)
    {
        $posts = $tag->posts()
                ->latest()
                ->get();

        return view('pages.tag', compact('posts', 'tag'));
    }

    public function single(Category $category, Post $post)
    {
        $posts = Post::query()
        ->latest()
        ->paginate(5);
        
        return view('pages.post', compact('posts', 'post'));
    }

    public function index_cms()
    {
        $cms =Auth::user()
            ->name;

        return view('cms.index', compact('cms'));
    }

    public function login()
    {
        return view('cms.pages.auth.login');
    }

    public function allPost()
    {
        $posts = Post::orderBy('title', 'asc')
        ->get();
        
        return view('pages.latest-news', compact('posts'));
    }

    public function search()
    {
        $posts = Post::latest() ->filter()
                                ->get();

       

        return view('pages.search', compact('posts'));
    }
}
