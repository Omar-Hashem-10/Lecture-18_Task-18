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

Route::get('/', function () {
    return view('web.site.pages.home.home');
});

Route::view('major', 'web.site.pages.major.major')->name('major');
Route::view('home', 'web.site.pages.home.home')->name('home');
Route::view('doctors', 'web.site.pages.doctors.index')->name('doctors');
Route::view('book_doctor', 'web.site.pages.doctors.doctor')->name('book_doctor');
Route::view('login', 'web.site.pages.login.login')->name('login');
Route::view('register', 'web.site.pages.register.register')->name('register');
Route::view('history', 'web.site.pages.history.history')->name('history');
Route::view('contact', 'web.site.pages.contact.contact')->name('contact');

