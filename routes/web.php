<?php

use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminProgramController;
use App\Http\Controllers\admin\AdminResourceController;
use App\Http\Controllers\admin\AdminTeamController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsLetterController;

Route::view('/', 'home');
// Route::view('/about', 'about');
// Route::view('/programs', 'programs');


Route::get('/blog', [AdminBlogController::class, 'blog'])->name('blog');
Route::get('/programs', [AdminProgramController::class, 'programs'])->name('programs');
Route::get('/about', [AdminTeamController::class, 'about'])->name('about');
Route::get('/team', [AdminTeamController::class, 'team'])->name('about');



Route::view('/resources', 'resources');
Route::view('/donate', 'donate');
Route::view('/contact', 'contact');

Route::post('/newsletter/subscribe', [NewsLetterController::class, 'subscribe'])->name('newsletter.subscribe');


// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// ->middleware(['auth', 'role:admin'])

Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/analytics', [AnalyticsController::class, 'showAnalytics'])->name('analytics');



// Admin Route (only accessible to admins)
Route::middleware(['auth', 'admin'])->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {
        // Pages
        Route::resource('pages', AdminPageController::class);
    
        Route::resource('blogs', AdminBlogController::class);
    
        Route::resource('programs', AdminProgramController::class);
    
        Route::resource('contact', ContactController::class);
    
        Route::resource('resources', AdminResourceController::class);   

    
        // Blogs
        // Team Management
        Route::resource('team', AdminTeamController::class);
    
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
    
   
});



Route::get('/newsletter', [AdminNewsController::class, 'index'])->name('admin.newsletter.index');

Route::get('/newsletter/{id}', [AdminNewsController::class, 'destroy'])->name('admin.newsletter.destroy');




Route::middleware(['auth'])->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});


