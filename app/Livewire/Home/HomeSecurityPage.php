<?php

namespace App\Livewire\Home;

use Livewire\Component;

class HomeSecurityPage extends Component
{
    public $title = 'Home Security - SecurTek';

    public function render()
    {
        return view('livewire.home.home-security-page')->layout('layouts.app');
    }
}
