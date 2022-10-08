<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/film', [App\Http\Controllers\HomeController::class, 'film'])->name('film');
Route::get('/news/show', [App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/video/show', [App\Http\Controllers\HomeController::class, 'Video'])->name('video');

require __DIR__.'/auth.php';
