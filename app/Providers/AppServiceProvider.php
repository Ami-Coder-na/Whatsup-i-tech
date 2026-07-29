<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
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
            // Auto-migrate & seed if tables don't exist (e.g. Vercel serverless /tmp/database.sqlite environment)
            if (!Schema::hasTable('services') || !Schema::hasTable('site_settings')) {
                Artisan::call('migrate', ['--force' => true]);
                Artisan::call('db:seed', ['--force' => true]);
            }

            if (Schema::hasTable('site_settings')) {
                View::composer('*', function ($view) {
                    $siteSettings = SiteSetting::pluck('value', 'key')->toArray();
                    $view->with('siteSettings', $siteSettings);
                });
            }
        } catch (\Throwable $e) {
            // Fallback gracefully
        }
    }
}