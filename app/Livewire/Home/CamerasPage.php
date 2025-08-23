<?php

namespace App\Livewire\Home;

use Livewire\Component;

class CamerasPage extends Component
{
   public $title = 'Cameras - SecurTek';

    public function render()
    {
        return view('livewire.home.cameras-page')->layout('layouts.app');
    }
}
