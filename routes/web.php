<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome')->name('home');
Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
Route::get('/hello', function () {
    return view('hello');
})->name('hello');
Route::get('/aaa', function () {
    return view('aaa');
})->name('aaa');
Route::get('/bbb', function () {
    return view('bbb');
})->name('bbb');

require __DIR__.'/settings.php';
