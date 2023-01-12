<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('home', function ($view) {
            $arr = [
                'users' => User::pluck('name', 'id'),
            ];

            $view->with('arr', $arr);
        });
    }
}
