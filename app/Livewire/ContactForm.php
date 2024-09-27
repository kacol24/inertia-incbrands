<?php

namespace App\Livewire;

use App\Livewire\Forms\Contact;
use App\Mail\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public Contact $form;

    public function handleSubmit()
    {
        if (Mail::to('kacol.bot@gmail.com')
                ->send(new ContactFormSubmission($this->form))) {
            session()->flash('success', 'Thank you for contacting us!');
            $this->form->reset();

            return;
        }

        session()->flash('danger', 'Something went wrong sending your form.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
