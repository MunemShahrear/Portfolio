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
            Route::get('/blog', function () {
                return view('backend.pages.blog.allBlog');
            })->name('all.blog');

            Route::get('/create/blog', function () {
                return view('backend.pages.blog.createBlog');
             })->name('create.blog');

            Route::get('/manage/edit/blog/{id}', function ($id) {
                return view('backend.pages.blog.editBlog', compact('id'));
            })->name('edit.blog');

            Route::post('/store/blog', [BlogController::class, 'store'])->name('blog.store');

            Route::post('/blog/update/{id}', [BlogController::class, 'updateb'])->name('blog.updateb');

            Route::delete('/blog/{id}', [BlogController::class,'destroy'])->name('blog.destroy');

        

//blog route end


//Profile route Start

            Route::get('manage/edit/profile', function () {
                return view('backend.pages.profile.editProfile');
                 })->name('edit.profile');
                
               
                 Route::post('/store/profile', [ProController::class, 'store'])->name('profile.store');
                 Route::post('/profile/update', [ProController::class, 'updatep'])->name('profile.updatep');
            
           
//Profile route end


//Image route Start

                Route::get('/manage/image', function () {
                    return view('backend.pages.website.manageImage');
                    })->name('manage.image');
                    Route::post('/store/image', [ImgController::class, 'store'])->name('image.store');

                    Route::post('/image/update', [ImgController::class, 'update'])->name('image.update');



//image route end


//Content route Start
                    Route::get('/manage/content', function () {
                return view('backend.pages.website.manageContent');
                })->name('manage.content');
                Route::post('/store/content', [ContentController::class, 'store'])->name('content.store');

                Route::post('/content/update', [ContentController::class, 'update'])->name('content.update');

//Content route End

//Login Profile route Start



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
