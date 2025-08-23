<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Home\HomePage;
use App\Livewire\Home\HomeSecurityPage;
use App\Livewire\Home\CamerasPage;
use App\Livewire\Home\PackagesPage;
use App\Livewire\Home\WarrantyPage;
use App\Livewire\Business\BusinessPage;
use App\Livewire\Business\CertificationPage;
use App\Livewire\About\AboutPage;
use App\Livewire\About\OurTeamPage;
use App\Livewire\About\PartnersPage;
use App\Livewire\About\CareersPage;
use App\Livewire\SupportPage;
use App\Livewire\SupportPages;
use Livewire\Livewire;
use App\Livewire\ContactPage;
use App\Livewire\SearchPage;
use App\Livewire\BecomeDealerPage;
use App\Livewire\About\DealerFinder;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', HomePage::class)->name('home');
Route::get('/home/home-security', HomeSecurityPage::class)->name('home-security');
Route::get('/home/cameras', CamerasPage::class)->name('cameras');
Route::get('/home/packages', PackagesPage::class)->name('packages');
Route::get('/home/warranty', WarrantyPage::class)->name('warranty');
Route::get('/business', BusinessPage::class)->name('business');
Route::get('/business/certification', CertificationPage::class)->name('certification');
Route::get('/about', AboutPage::class)->name('about');
Route::get('/about/our-team', OurTeamPage::class)->name('our-team');
Route::get('/about/partners', PartnersPage::class)->name('partners');
Route::get('/about/careers', CareersPage::class)->name('careers');
Route::get('/about/find-dealer', DealerFinder::class)->name('find-dealer');
Route::get('/support', SupportPage::class)->name('support');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/search', SearchPage::class)->name('search');
Route::get('/become-dealer', BecomeDealerPage::class)->name('become-dealer');


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
