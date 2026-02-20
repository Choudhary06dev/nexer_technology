<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about');

Route::get('/authors', function () {
    return view('frontend.team');
})->name('authors');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);
