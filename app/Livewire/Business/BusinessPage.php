<?php

namespace App\Livewire\Business;

use Livewire\Component;

class BusinessPage extends Component
{
    public $title = 'Business - SecurTek';
    public function render()
    {
        return view('livewire.business.business-page')->layout('layouts.app');
    }
}
