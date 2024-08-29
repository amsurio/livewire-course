<?php

use App\Livewire\Dashboard;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
// Route::livewire('/', 'home')->name('home')->middleware('auth');
Route::get('/home', Home::class)->name('home')->middleware('auth');
Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');


require __DIR__ . '/auth.php';
