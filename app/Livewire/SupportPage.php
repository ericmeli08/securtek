<?php

namespace App\Livewire;

use Livewire\Component;

class SupportPage extends Component
{
    public $title = 'Support - SecurTek';
    public function render()
    {
        return view('livewire.support-page')->layout('layouts.app');
    }
}
