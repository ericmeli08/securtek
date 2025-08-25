<?php

namespace App\Livewire\Partials;

use App\Jobs\SendContactMail;
use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
     public $name, $email, $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submitContact()
    {
        $this->validate();

        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        SendContactMail::dispatch($contact);

        session()->flash('message', 'Merci ! Votre message a bien été envoyé.');
        $this->reset('name', 'email', 'message');
    }
    public function render()
    {
        return view('livewire.partials.contact-form');
    }
}
