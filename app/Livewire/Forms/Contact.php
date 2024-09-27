<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class Contact extends Form
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    public $subject = '';

    public $message = '';
}
