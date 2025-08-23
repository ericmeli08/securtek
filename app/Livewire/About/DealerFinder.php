<?php

namespace App\Livewire\About;

use App\Models\Dealer;
use Livewire\Component;

class DealerFinder extends Component
{
    public $title = 'Find a Dealer - SecuriTek';

    // Filter properties
    public $selectedCountry = '';
    public $selectedProvince = '';
    public $selectedCity = '';

    // Data properties
    public $dealers = [];
    public $countries = [];
    public $provinces = [];
    public $cities = [];
    public $selectedDealer = null;

    public function mount()
    {
        $this->loadCountries();
        $this->loadDealers();
    }

    public function updatedSelectedCountry()
    {
        $this->selectedProvince = '';
        $this->selectedCity = '';
        $this->loadProvinces();
        $this->loadDealers();
    }

    public function updatedSelectedProvince()
    {
        $this->selectedCity = '';
        $this->loadCities();
        $this->loadDealers();
    }

    public function updatedSelectedCity()
    {
        $this->loadDealers();
    }

    public function updatedSearchQuery()
    {
        $this->loadDealers();
    }

    // public function selectDealer($dealerId)
    // {
    //     $this->selectedDealer = $dealerId ? Dealer::find($dealerId) : null;
    //     $this->dispatch('dealer-selected', ['dealer' => $this->selectedDealer]);
    // }

    public function clearFilters()
    {
        $this->selectedCountry = '';
        $this->selectedProvince = '';
        $this->selectedCity = '';
        $this->selectedDealer = null;

        $this->loadCountries();
        $this->loadDealers();
    }

    private function loadCountries()
    {
        $this->countries = Dealer::active()
            ->select('country')
            ->distinct()
            ->orderBy('country')
            ->pluck('country')
            ->toArray();
    }

    private function loadProvinces()
    {
        $this->provinces = Dealer::active()
            ->byCountry($this->selectedCountry)
            ->select('province')
            ->distinct()
            ->orderBy('province')
            ->pluck('province')
            ->toArray();
    }

    private function loadCities()
    {
        $this->cities = Dealer::active()
            ->byCountry($this->selectedCountry)
            ->byProvince($this->selectedProvince)
            ->select('city')
            ->distinct()
            ->orderBy('city')
            ->pluck('city')
            ->toArray();
    }

    private function loadDealers()
    {
        $this->dealers = Dealer::active()
            ->byCountry($this->selectedCountry)
            ->byProvince($this->selectedProvince)
            ->byCity($this->selectedCity)
            ->orderBy('province')
            ->orderBy('city')
            ->orderBy('name')
            ->get()
            ->groupBy('province')
            ->toArray();
    }

    public function render()
    {
        return view('livewire.about.dealer-finder-page')->layout('layouts.app');
    }
}
