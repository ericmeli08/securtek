<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $title = 'SecurTek - Safe. Secure. 24/7';

    public function render()
    {
        return view('livewire.home-page')->layout('layouts.app');
    }
}
