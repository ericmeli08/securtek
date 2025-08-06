<?php

namespace App\Livewire;

use Livewire\Component;

class ContactPage extends Component
{

    public $title = 'Contact - SecurTek';
    public function render()
    {
        return view('livewire.contact-page')->layout('layouts.app');
    }
}
