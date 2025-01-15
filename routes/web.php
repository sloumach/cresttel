<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('service');

// Add new routes here
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/adu', function () {
    return view('adu');
})->name('adu');

Route::get('/mdu', function () {
    return view('mdu');
})->name('mdu');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/commercial', function () {
    return view('commercial');
})->name('commercial');

Route::get('/fence', function () {
    return view('fence');
})->name('fence');

Route::get('/residential', function () {
    return view('residential');
})->name('residential');

Route::get('/adublog1', function () {
    return view('adublog1');
})->name('adublog1');

Route::get('/adublog2', function () {
    return view('adublog2');
})->name('adublog2');

Route::get('/adublog3', function () {
    return view('adublog3');
})->name('adublog3');

Route::get('/mdublog1', function () {
    return view('mdublog1');
})->name('mdublog1');

Route::get('/mdublog2', function () {
    return view('mdublog2');
})->name('mdublog2');

Route::get('/mdublog3', function () {
    return view('mdublog3');
})->name('mdublog3');

Route::get('/fenceblog1', function () {
    return view('fenceblog1');
})->name('fenceblog1');

Route::get('/fenceblog2', function () {
    return view('fenceblog2');
})->name('fenceblog2');

Route::get('/fenceblog3', function () {
    return view('fenceblog3');
})->name('fenceblog3');

Route::get('/commercialblog1', function () {
    return view('commercialblog1');
})->name('commercialblog1');

Route::get('/commercialblog2', function () {
    return view('commercialblog2');
})->name('commercialblog2');

Route::get('/commercialblog3', function () {
    return view('commercialblog3');
})->name('commercialblog3');

Route::get('/residentialblog1', function () {
    return view('residentialblog1');
})->name('residentialblog1');

Route::get('/residentialblog2', function () {
    return view('residentialblog2');
})->name('residentialblog2');

Route::get('/residentialblog3', function () {
    return view('residentialblog3');
})->name('residentialblog3');

Route::controller(ContactController::class)->group(function () {
    Route::post('/contact', 'saveMessage')->name('saveMessage');

});

Route::controller(ContactController::class)->group(function () {
    Route::get('/inboxmessages', 'inboxmessages')->name('inboxmessages');

});
