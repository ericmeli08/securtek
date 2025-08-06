<?php

namespace App\Livewire;

use Livewire\Component;

class AboutPage extends Component
{

    public $title = 'About - SecurTek';
    public function render()
    {
        return view('livewire.about-page')->layout('layouts.app');
    }
}
