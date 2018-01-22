<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function boot()
    {
      $topics = \App\Models\Topic::all();
      View::share('topics', $topics);
    }

    public function register()
    {
        //
    }
}
