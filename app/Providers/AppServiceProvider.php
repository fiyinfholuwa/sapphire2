<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('*', function ($view) {
            $cart_count = Auth::check() ? Cart::where('userid', Auth::id())->count() : 0;
            $post_footer = Post::offset(0)->limit(2)->get();

            $view->with(compact('cart_count', 'post_footer'));
        });
    }

}

