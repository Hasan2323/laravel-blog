<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function($view){

//            $view->with('archives', \App\Post::archives());
//            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
            // evabe or nicher tar moto

            $archives = \App\Post::archives();
            $tags     = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives','tags'));
        });
    }
}
