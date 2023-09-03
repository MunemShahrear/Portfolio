<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->name('dashboard');
//blog route

Route::get('/create/blog', function () {
    return view('backend.pages.blog.createBlog');
})->name('create.blog');

Route::get('/create/profile', function () {
    return view('backend.pages.profile.createProfile');
})->name('create.profile');

Route::post('/store/blog', [BlogController::class, 'store'])->name('blog.store');
Route::post('/store/profile', [ProController::class, 'store'])->name('profile.store');
Route::post('/profile/update', [ProController::class, 'updatep'])->name('profile.updatep');

Route::get('/blog', function () {
    return view('backend.pages.blog.allBlog');
})->name('all.blog');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
