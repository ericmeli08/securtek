<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\HomePage;
use App\Livewire\HomeSecurityPage;
use App\Livewire\CamerasPage;
use App\Livewire\PackagesPage;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', HomePage::class)->name('home');
Route::get('/home-security', HomeSecurityPage::class)->name('home-security');
Route::get('/cameras', CamerasPage::class)->name('cameras');
Route::get('/packages', PackagesPage::class)->name('packages');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
