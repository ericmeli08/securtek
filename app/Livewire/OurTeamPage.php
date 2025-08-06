<?php

namespace App\Livewire;

use Livewire\Component;

class OurTeamPage extends Component
{
    public $title = 'Our Team - SecurTek';
    public function render()
    {
        return view('livewire.our-team-page')->layout('layouts.app');
    }
}
