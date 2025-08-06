<?php

namespace App\Livewire;

use Livewire\Component;

class CertificationPage extends Component
{
    public $title = 'Certification - SecurTek';
    public function render()
    {
        return view('livewire.certification-page')->layout('layouts.app');
    }
}
