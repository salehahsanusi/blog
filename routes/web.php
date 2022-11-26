<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs/create', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
Route::get('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blogs.show');