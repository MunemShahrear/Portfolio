<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/blogs', function () {
    return view('frontend.pages.webBlog');
})->name('web.blog');





Route::middleware('auth')->group(function () {
   



Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->name('dashboard');
//blog route
            Route::get('/blog', function () {
                return view('backend.pages.blog.allBlog');
            })->name('all.blog');

            Route::get('/create/category', function () {
                return view('backend.pages.blog.createCategory');
             })->name('create.category');
            Route::get('/create/blog', function () {
                return view('backend.pages.blog.createBlog');
             })->name('create.blog');

            Route::get('/manage/edit/blog/{id}', function ($id) {
                return view('backend.pages.blog.editBlog', compact('id'));
            })->name('edit.blog');

            Route::post('/store/blog', [BlogController::class, 'store'])->name('blog.store');
            Route::post('/blog/update/{id}', [BlogController::class, 'updateb'])->name('blog.updateb');
            Route::post('/blog/{id}', [BlogController::class,'destroy'])->name('blog.destroy');

        

//blog route end

//Category route Start
Route::post('/create/category', [CategoryController::class, 'category'])->name('blog.category');
Route::post('/category/{id}', [CategoryController::class,'destroy'])->name('category.destroy');

Route::get('/show/result/', [CategoryController::class, 'sort'])->name('sort.category');
//Category route End

//Profile route Start

            Route::get('manage/edit/profile', function () {
                return view('backend.pages.profile.editProfile');
                 })->name('edit.profile');
                
               
                 Route::post('/store/profile', [ProController::class, 'store'])->name('profile.store');
                 Route::post('/profile/update', [ProController::class, 'updatep'])->name('profile.updatep');
            
           
//Profile route end



//Content route Start
                    Route::get('/manage/content', function () {
                return view('backend.pages.website.manageContent');
                })->name('manage.content');
                Route::post('/content/update', [ContentController::class, 'updatec'])->name('content.updatec');

//Content route End


//Content route Start

Route::get('/manage/admin', function () {
    return view('backend.pages.admin.manageAdmin');
    })->name('manage.admin');
//Login Profile route Start

// });



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/admin/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/logout', [ProfileController::class, 'destroy'])->name('logout');
});

require __DIR__.'/auth.php';
