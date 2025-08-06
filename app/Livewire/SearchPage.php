<?php

namespace App\Livewire;

use Livewire\Component;

class SearchPage extends Component
{
    public $title = 'Search - SecurTek';
    public function render()
    {
        return view('livewire.search-page')->layout('layouts.app');
    }
}
