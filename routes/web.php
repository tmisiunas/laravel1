<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

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

Route::get('/sports', [SportController::class, 'index'])->name('sports.index');

require __DIR__.'/settings.php';
