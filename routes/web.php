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
Route::get('show', [\App\Http\Controllers\PostController::class, 'show' ])->name('show');
Route::get('create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::get('edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit');


Route::resource('posts', \App\Http\Controllers\PostController::class);
//Route::resource('posts', [\App\Http\Controllers\PostController::class]);
