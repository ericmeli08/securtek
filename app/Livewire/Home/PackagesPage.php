<?php

namespace App\Livewire\Home;

use Livewire\Component;

class PackagesPage extends Component
{
    public $title = 'Packages - SecurTek';

    public function render()
    {
        return view('livewire.home.packages-page')->layout('layouts.app');
    }
}
