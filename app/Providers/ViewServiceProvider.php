<?php

namespace App\Providers;
use App\View\Composers\TestComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //resources/views/testcomposer.blade.phpと
        //コンポーサーを紐づける
        View::composer('testcomposer', TestComposer::class);
    }
}
