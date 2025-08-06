<?php

use App\Livewire\BusinessPage;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\HomePage;
use App\Livewire\HomeSecurityPage;
use App\Livewire\CamerasPage;
use App\Livewire\PackagesPage;
use App\Livewire\WarrantyPage;
use App\Livewire\AboutPage;
use App\Livewire\CertificationPage;
use App\Livewire\OurTeamPage;
use App\Livewire\PartnersPage;
use App\Livewire\CareersPage;
use App\Livewire\SupportPage;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', HomePage::class)->name('home');
Route::get('/home-security', HomeSecurityPage::class)->name('home-security');
Route::get('/cameras', CamerasPage::class)->name('cameras');
Route::get('/packages', PackagesPage::class)->name('packages');
Route::get('/warranty', WarrantyPage::class)->name('warranty');
Route::get('/business', BusinessPage::class)->name('business');
Route::get('/certification', CertificationPage::class)->name('certification');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/our-team', OurTeamPage::class)->name('our-team');
Route::get('/partners', PartnersPage::class)->name('partners');
Route::get('/careers', CareersPage::class)->name('careers');
Route::get('/support', SupportPage::class)->name('support');
Route::get('/contact', \App\Livewire\ContactPage::class)->name('contact');


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
