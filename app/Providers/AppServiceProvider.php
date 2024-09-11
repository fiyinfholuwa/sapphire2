<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*',function($view) {
            $view->with('post_footer', Post::offset(0)->limit(2)->get());
        });
    }
}

