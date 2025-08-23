<?php

namespace App\Livewire\About;

use Livewire\Component;

class OurTeamPage extends Component
{
    public $title = 'Our Team - SecurTek';
    public function render()
    {
        return view('livewire.about.our-team-page')->layout('layouts.app');
    }
}
