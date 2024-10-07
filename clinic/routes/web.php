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
    return view('web.site.pages.home.index');
});

Route::view('major', 'web.site.pages.major.index')->name('major.index');
Route::view('home', 'web.site.pages.home.index')->name('home.index');
Route::view('doctors', 'web.site.pages.doctors.index')->name('doctors.index');
Route::view('book_doctor', 'web.site.pages.doctors.doctor')->name('doctors.doctor');
Route::view('login', 'web.site.pages.login.index')->name('login.index');
Route::view('register', 'web.site.pages.register.index')->name('register.index');
Route::view('history', 'web.site.pages.history.index')->name('history.index');
Route::view('contact', 'web.site.pages.contact.index')->name('contact.index');

