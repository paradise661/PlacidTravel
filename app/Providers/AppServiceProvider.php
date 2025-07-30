<?php

namespace App\Providers;

use App\Models\Services;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        $setting = Setting::pluck('value', 'key');
        $data1 = Social::oldest('order')->get() ?? [];
        $data2 = Services::where('status', 1)->limit(5)->latest()->get();

        View::share('setting', $setting);
        View::share('social', $data1);
        View::share('globalservices', $data2);

        Paginator::useBootstrap();
    }
}
