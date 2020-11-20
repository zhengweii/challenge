<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@store');

Route::get('/logout', 'LogoutController@store')->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/lab', 'LabController@index')->name('lab');
