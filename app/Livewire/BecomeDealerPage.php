<?php

namespace App\Livewire;

use Livewire\Component;

class BecomeDealerPage extends Component
{
    public $title = 'Become a Dealer - SecurTek';
    public function render()
    {
        return view('livewire.become-dealer-page')->layout('layouts.app');
    }
}
