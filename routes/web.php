<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// view for the home page
Route::get('/', function () {
    return view('./website/index');
});

// view for the home page end

// about view start

Route::get('about', function(){
    return view('./website/about');
});

// about view end

// courses view start
Route::get('courses', function(){
    return view('./website/courses');
});

// courses view end

// courses-details view start
Route::get('course-details', function(){
    return view('./website/course-details');
});

// courses-details view end

// contact view start

Route::get('contact', function(){
    return view('./website/contact');
});

// contact view end

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
