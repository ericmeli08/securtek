<?php

namespace App\Livewire;

use Livewire\Component;

class BusinessPage extends Component
{
    public $title = 'Business - SecurTek';
    public function render()
    {
        return view('livewire.business-page')->layout('layouts.app');
    }
}
