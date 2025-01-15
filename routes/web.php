<?php

use Illuminate\Support\Facades\Route;

// Main routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/service', function () {
    return view('services');
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/project', function () {
    return view('project');
})->name('project');

// Additional routes for all other views
Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/residential', function () {
    return view('residential');
})->name('residential');

Route::get('/residentialBlog1', function () {
    return view('residentialBlog1');
})->name('residentialBlog1');

Route::get('/residentialBlog2', function () {
    return view('residentialBlog2');
})->name('residentialBlog2');

Route::get('/residentialBlog3', function () {
    return view('residentialBlog3');
})->name('residentialBlog3');

Route::get('/fence', function () {
    return view('fence');
})->name('fence');

Route::get('/fenceBlog1', function () {
    return view('fenceBlog1');
})->name('fenceBlog1');

Route::get('/fenceBlog2', function () {
    return view('fenceBlog2');
})->name('fenceBlog2');

Route::get('/fenceBlog3', function () {
    return view('fenceBlog3');
})->name('fenceBlog3');

Route::get('/mdu', function () {
    return view('mdu');
})->name('mdu');

Route::get('/mduBlog1', function () {
    return view('mduBlog1');
})->name('mduBlog1');

Route::get('/mduBlog2', function () {
    return view('mduBlog2');
})->name('mduBlog2');

Route::get('/mduBlog3', function () {
    return view('mduBlog3');
})->name('mduBlog3');

Route::get('/adu', function () {
    return view('adu');
})->name('adu');

Route::get('/aduBlog1', function () {
    return view('aduBlog1');
})->name('aduBlog1');

Route::get('/aduBlog2', function () {
    return view('aduBlog2');
})->name('aduBlog2');

Route::get('/aduBlog3', function () {
    return view('aduBlog3');
})->name('aduBlog3');

Route::get('/commercial', function () {
    return view('commercial');
})->name('commercial');

Route::get('/commercialBlog1', function () {
    return view('commercialBlog1');
})->name('commercialBlog1');

Route::get('/commercialBlog2', function () {
    return view('commercialBlog2');
})->name('commercialBlog2');

Route::get('/commercialBlog3', function () {
    return view('commercialBlog3');
})->name('commercialBlog3');

Route::get('/contactForm', function () {
    return view('contactForm');
})->name('contactForm');
// Optional: Add fallback route for 404
Route::fallback(function () {
    return view('404'); // Create a 404.blade.php if not already present
});
