<?php

namespace App\Livewire\Business;

use Livewire\Component;

class CertificationPage extends Component
{
    public $title = 'Certification - SecurTek';
    public function render()
    {
        return view('livewire.business.certification-page')->layout('layouts.app');
    }
}
