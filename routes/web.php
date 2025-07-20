<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect('/index');
});

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Week 2
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::get( "/gallery" , function(){
	$ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg"; 
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/index", compact("ant","bird","cat"));
})->name('gallery');

Route::get("/gallery/ant", function () {
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("ant"));
});

Route::get("/gallery/bird", function () {
    $bird = "https://images.indianexpress.com/2021/03/falcon-anthony-mackie-1200.jpg";
    return view("test/bird", compact("bird"));
});

Route::get("/gallery/cat", function () {
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("cat"));
});

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
// - Week 3
// ---------------------------------------------------------------------------------------------------------------------------------------------------->>
Route::get('/index', function () {
    return view('active/index');
})->name('index');

Route::get('/about', function () {
    return view('active/about');
})->name('about');

Route::get('/services', function () {
    return view('active/services');
})->name('services');

Route::get('/portfolio', function () {
    return view('active/portfolio');
})->name('portfolio');

Route::get('/team', function () {
    return view('active/team');
})->name('team');

Route::get('/blog', function () {
    return view('active/blog');
})->name('blog');

Route::get('/contact', function () {
    return view('active/contact');
})->name('contact');

// ---------------------------------------------------------------------------------------------------------------------------------------------------->>

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
