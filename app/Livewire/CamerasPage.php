<?php

namespace App\Livewire;

use Livewire\Component;

class CamerasPage extends Component
{
   public $title = 'Cameras - SecurTek';

    public function render()
    {
        return view('livewire.cameras-page')->layout('layouts.app');
    }
}
