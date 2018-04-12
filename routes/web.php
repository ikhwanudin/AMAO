<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard/dashboard')->name('dashboard');
Route::view('/dashboard/absensi', 'dashboard/absensi')->name('absensi');
