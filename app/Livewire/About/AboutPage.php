<?php

namespace App\Livewire\About;

use Livewire\Component;

class AboutPage extends Component
{

    public $title = 'About - SecurTek';
    public function render()
    {
        return view('livewire.about.about-page')->layout('layouts.app');
    }
}
