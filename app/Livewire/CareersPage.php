<?php

namespace App\Livewire;

use Livewire\Component;

class CareersPage extends Component
{
    public $title = 'Careers - SecurTek';
    public function render()
    {
        return view('livewire.careers-page')->layout('layouts.app');
    }
}
