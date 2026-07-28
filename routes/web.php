<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/package/{id}', [HomeController::class, 'packageDetail'])->name('package.detail');
Route::post('/contact-submit', [HomeController::class, 'submitContact'])->name('contact.submit');

// Admin Panel Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Services
    Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
    Route::post('/services', [AdminController::class, 'storeService'])->name('admin.services.store');
    Route::delete('/services/{id}', [AdminController::class, 'deleteService'])->name('admin.services.delete');

    // Packages
    Route::get('/packages', [AdminController::class, 'packages'])->name('admin.packages');
    Route::post('/packages/{id}', [AdminController::class, 'updatePackage'])->name('admin.packages.update');

    // Demos
    Route::get('/demos', [AdminController::class, 'demos'])->name('admin.demos');
    Route::post('/demos', [AdminController::class, 'storeDemoLink'])->name('admin.demos.store');
    Route::delete('/demos/{id}', [AdminController::class, 'deleteDemoLink'])->name('admin.demos.delete');

    // Messages
    Route::get('/messages', [AdminController::class, 'messages'])->name('admin.messages');

    // Logout
    Route::post('/logout', function() {
        return redirect()->route('home')->with('success', 'অ্যাডমিন থেকে লগআউট করা হয়েছে!');
    })->name('admin.logout');
});
