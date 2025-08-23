<?php

namespace App\Livewire\About;

use Livewire\Component;

class CareersPage extends Component
{
    public $title = 'Careers - SecurTek';
    public function render()
    {
        return view('livewire.about.careers-page')->layout('layouts.app');
    }
}
