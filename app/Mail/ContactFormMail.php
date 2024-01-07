<?php

// app/Mail/ContactFormMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     * @param string $message
     * @return void
     */
    public function __construct($name, $email, $message)
{
    $this->name = $name;
    $this->email = $email;
    $this->message = $message;
}

public function build()
{
    return $this->view('emails.contact-form')
        ->with([
            'name' => $this->name,
            'email' => $this->email,
            'content' => $this->message, 
        ]);
}
}