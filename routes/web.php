<?php

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'main']);
Route::get('about', [\App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('service', [\App\Http\Controllers\PageController::class, 'service'])->name('service');
Route::get('projects' , [\App\Http\Controllers\PageController::class, 'projects'])->name('projects');
Route::get('contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('contact');


Route::get('LatestBlogs', [\App\Http\Controllers\PostController::class, 'index' ])->name('LatestBlogs');
Route::get('blogDetails', [\App\Http\Controllers\PostController::class, 'details' ])->name('BlogsDetail');

//Route::resource('post', [\App\Http\Controllers\PostController::class]);
