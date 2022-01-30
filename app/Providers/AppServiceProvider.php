<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        View::composer('components.web.sidebar', function ($view) {
            $view->with('tags', Tag::latest()->get());
        });

        View::composer('components.web.footer', function ($view) {
            $view->with('categoryLatests', Post::latest()->get());
        });

        View::composer('components.web.footer', function ($view) {
            $view->with('latests', Post::latest()->get());
        });

        View::composer('components.cms.sidebar', function ($view) {
            $view->with('latests', Auth::user());
        });
    }
}
