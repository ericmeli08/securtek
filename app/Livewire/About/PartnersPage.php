<?php

namespace App\Livewire\About;

use Livewire\Component;

class PartnersPage extends Component
{
    public $title = 'Partners - SecurTek';
    public function render()
    {
        return view('livewire.about.partners-page')->layout('layouts.app');
    }
}
