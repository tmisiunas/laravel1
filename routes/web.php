<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SportController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BetController;

require __DIR__.'/settings.php';

Route::view('/', 'home')->name('home');

Route::get('/dashboard', function () {
    if (auth()->user()->role !== 'admin') {
        return redirect()->route('home'); // 👈 prevent 403
    }

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/sports', [SportController::class, 'index'])->name('sports.index');

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');

Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store');
Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::post('/bets', [BetController::class, 'store'])->name('bets.store');


