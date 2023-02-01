<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

/** USERS **/

Route::get('/users', [UserController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('users');

Route::get('/users/add', [UserController::class, 'form'])
        ->middleware(['auth', 'verified']);

Route::post('/users/add', [UserController::class, 'store'])
        ->middleware(['auth', 'verified']);

Route::get('/users/update/{id}', [UserController::class, 'show'])
        ->middleware(['auth', 'verified']);
Route::post('/users/update/{id}', [UserController::class, 'update'])
        ->middleware(['auth', 'verified']);
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])
        ->middleware(['auth', 'verified']);       
        




/** ANNOUNCEMENT**/        
Route::get('/announcements', [AnnouncementController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('announcements');

Route::get('/announcements/add', [AnnouncementController::class, 'upload'])
        ->middleware(['auth', 'verified']);
        

Route::post('/announcements/add', [AnnouncementController::class, 'store'])
        ->middleware(['auth', 'verified']);

Route::get('/announcements/update/{id}', [AnnouncementController::class, 'show'])
        ->middleware(['auth', 'verified']);
Route::post('/announcements/update/{id}', [AnnouncementController::class, 'update'])
        ->middleware(['auth', 'verified']);
Route::delete('/announcements/delete/{id}', [AnnouncementController::class, 'destroy'])
        ->middleware(['auth', 'verified']);  


Auth::routes();
        /** Admin **/
Route::middleware(['auth','user-role:admin'])->group(function()
{
        Route::get("/dashboard",[UserController::class,'adminHome'])->name('dashboard');
        /**users**/
        /*
        Route::get('/users/add', [UserController::class, 'form'])->name('users.form');
        Route::post('/users/add', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/update{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('/users/update{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/delete{id}', [UserController::class, 'destroy'])->name('users.destroy');*/
        /**announcements**/
        /*
        Route::get('/announcements/add', [AnnouncementController::class, 'upload'])->name('announcements.upload');
        Route::post('/announcements/add', [AnnouncementController::class, 'store'])->name('announcements.store');
        Route::get('/announcements/update{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
        Route::post('/announcements/update{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
        Route::delete('/announcements/delete{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');*/
});


        /** Clerk **/
Route::middleware(['auth','user-role:clerk'])->group(function()
{
        Route::get("/clerk/dashboard",[UserController::class,'clerkHome'])->name('dashboard.clerk');
        /**users**/
        /*
        Route::get('/users/add', [UserController::class, 'form'])->name('users.form');
        Route::post('/users/add', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/update{id}', [UserController::class, 'show'])->name('users.show');
        Route::post('/users/update{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/delete{id}', [UserController::class, 'destroy'])->name('users.destroy');*/
        /**announcements**/
        /*
        Route::get('/announcements/add', [AnnouncementController::class, 'upload'])->name('announcements.upload');
        Route::post('/announcements/add', [AnnouncementController::class, 'store'])->name('announcements.store');
        Route::get('/announcements/update{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
        Route::post('/announcements/update{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
        Route::delete('/announcements/delete{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');*/
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
