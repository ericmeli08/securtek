<?php

namespace App\Livewire;

use Livewire\Component;

class PartnersPage extends Component
{
    public $title = 'Partners - SecurTek';
    public function render()
    {
        return view('livewire.partners-page')->layout('layouts.app');
    }
}
