<?php

namespace App\Livewire\Home;

use Livewire\Component;

class WarrantyPage extends Component
{
    public $title = 'Warranty - SecurTek';
    public function render()
    {
        return view('livewire.home.warranty-page')->layout('layouts.app');
    }
}
