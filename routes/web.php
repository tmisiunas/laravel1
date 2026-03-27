<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CountryController;

//Route::view('/', 'welcome')->name('home');
Route::view('/', 'home')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/sports', [SportController::class, 'index'])->name('sports.index');

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');

require __DIR__.'/settings.php';
