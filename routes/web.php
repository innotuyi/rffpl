<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/programs', 'programs');
Route::view('/blog', 'blog');
Route::view('/resources', 'resources');
Route::view('/donate', 'donate');
Route::view('/contact', 'contact');

// ->middleware(['auth', 'role:admin'])


Route::prefix('admin')->name('admin.')->group(function () {
    // Pages
    Route::resource('pages', AdminPageController::class);

    // Blogs
    Route::resource('blogs', BlogController::class);

    // Team Management
    Route::resource('team', TeamController::class);

    // Organization Details
    Route::get('organization', [OrganizationController::class, 'edit'])->name('organization.edit');
    Route::post('organization', [OrganizationController::class, 'update'])->name('organization.update');

    // Donations
    Route::get('donations', [DonationController::class, 'index'])->name('donations.index');
    Route::post('donations/settings', [DonationController::class, 'update'])->name('donations.update');

    // Email Accounts
    Route::resource('emails', EmailController::class);

    // Analytics
    Route::get('analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
});



