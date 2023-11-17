<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
})->name('welcome');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('terms', function () {
    return view('terms');
})->name('terms');

Route::get('privacy', function () {
    return view('privacy');
})->name('privacy');

Route::resource('product', ProductController::class)
    ->only(['index']);

Route::resource('project', ProjectController::class)
    ->only(['index']);

Route::get('/contact', [ContactController::class, 'create'])
    ->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
