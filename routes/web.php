<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/package/{id}', [HomeController::class, 'packageDetail'])->name('package.detail');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-and-conditions', [HomeController::class, 'termsConditions'])->name('terms.conditions');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');

// Admin Panel Routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'processLogin'])->name('admin.login.submit');

Route::prefix('admin')->group(function () {
    Route::get('/', function() {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Services
    Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
    Route::post('/services/store', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::post('/services/update/{id}', [AdminController::class, 'updateService'])->name('admin.services.update');
    Route::match(['get', 'delete'], '/services/delete/{id}', [AdminController::class, 'deleteService'])->name('admin.services.delete');

    // Packages
    Route::get('/packages', [AdminController::class, 'packages'])->name('admin.packages');
    Route::post('/packages/update/{id}', [AdminController::class, 'updatePackage'])->name('admin.packages.update');

    // Demos
    Route::get('/demos', [AdminController::class, 'demos'])->name('admin.demos');
    Route::post('/demos/store', [AdminController::class, 'storeDemoLink'])->name('admin.demos.store');
    Route::match(['get', 'delete'], '/demos/delete/{id}', [AdminController::class, 'deleteDemoLink'])->name('admin.demos.delete');

    // Blogs
    Route::get('/blogs', [AdminController::class, 'blogs'])->name('admin.blogs');
    Route::post('/blogs/store', [AdminController::class, 'storeBlog'])->name('admin.blogs.store');
    Route::match(['get', 'delete'], '/blogs/delete/{id}', [AdminController::class, 'deleteBlog'])->name('admin.blogs.delete');

    // Messages
    Route::get('/messages', [AdminController::class, 'messages'])->name('admin.messages');

    // Site Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
    Route::match(['get', 'delete'], '/settings/hero-banner/delete/{index}', [AdminController::class, 'deleteHeroBanner'])->name('admin.hero.banner.delete');

    // Logout
    Route::post('/logout', function() {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login')->with('success', 'অ্যাডমিন থেকে লগআউট করা হয়েছে!');
    })->name('admin.logout');
});
