<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $title = 'SecurTek - Safe. Secure. 24/7';

    public $currentSlide = 0;
    
    public $slides = [
        [
            'image' => 'https://images.pexels.com/photos/1146603/pexels-photo-1146603.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop',
            'title' => 'Simplify life!',
            'subtitle' => 'Security solutions & the latest technology'
        ],
        [
            'image' => 'https://images.pexels.com/photos/4483762/pexels-photo-4483762.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop',
            'title' => 'Protect your world.',
            'subtitle' => 'Your safety is our priority'
        ],
        [
            'image' => 'https://images.pexels.com/photos/5439434/pexels-photo-5439434.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop',
            'title' => 'Smart home, smart you.',
            'subtitle' => 'Innovation meets comfort'
        ]
    ];

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function render()
    {
        return view('livewire.home-page')->layout('layouts.app');
    }
}
