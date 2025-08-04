<?php

namespace App\Livewire;

use Livewire\Component;

class PackagesPage extends Component
{
    public $title = 'Packages - SecurTek';

    public function render()
    {
        return view('livewire.packages-page')->layout('layouts.app');
    }
}
