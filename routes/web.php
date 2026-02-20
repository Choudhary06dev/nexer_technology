<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

// Redirecting separate pages to Home page sections for single-page experience
Route::get('/blog', function () {
    return redirect('/#blog');
})->name('blog');
Route::get('/about-us', function () {
    return redirect('/#about');
})->name('about');
Route::get('/authors', function () {
    return redirect('/#team');
})->name('authors');
Route::get('/contact', function () {
    return redirect('/#contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store']);
