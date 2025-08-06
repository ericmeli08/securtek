<?php

namespace App\Livewire;

use Livewire\Component;

class WarrantyPage extends Component
{
    public $title = 'Warranty - SecurTek';
    public function render()
    {
        return view('livewire.warranty-page')->layout('layouts.app');
    }
}
