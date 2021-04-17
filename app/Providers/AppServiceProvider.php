<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Observers\BlogPostObserver;
use App\Observers\BlogCategoryObserver;
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
        BlogPost::observe(BlogPostObserver::class);
        BlogCategory::observe(BlogCategoryObserver::class);
    }



}
