<?php

namespace App\Jobs;

use App\Mail\ContactMessageMail;
use App\Models\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactMail implements ShouldQueue
{
    use Queueable,SerializesModels;

    /**
     * Create a new job instance.
     */
    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Execute the job.
     */
   public function handle(): void
    {
        $to = config('mail.contact.address');
        Mail::to($to)->send(new ContactMessageMail($this->contact));
    }
}
