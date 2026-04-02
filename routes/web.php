<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventController;

require __DIR__.'/settings.php';

//Route::view('/', 'welcome')->name('home');
Route::view('/', 'home')->name('home');

//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::view('dashboard', 'dashboard')->name('dashboard');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/sports', [SportController::class, 'index'])->name('sports.index');

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events', [EventController::class, 'index'])->name('events.index');

