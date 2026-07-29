<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\SiteSetting;

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
        try {
            if (Schema::hasTable('site_settings')) {
                View::composer('*', function ($view) {
                    $siteSettings = SiteSetting::pluck('value', 'key')->toArray();
                    $view->with('siteSettings', $siteSettings);
                });
            }
        } catch (\Throwable $e) {
            // Fallback during initial migrations
        }
    }
}