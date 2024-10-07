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

Route::get('/home', function () {
    return view('site.home.index');
})->name("home.index");

Route::get('/about', function () {
    return view('site.about.index');
})->name("about.index");

Route::get('/contact', function () {
    return view('site.contact.index');
})->name("contact.index");
