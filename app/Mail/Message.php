<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $email;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @param $data
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Message From ' . $this->name)
                    ->from($this->email)
                    ->view('emails.message')
                    ->with(['senderName' => $this->name, 'senderMessage' => $this->message, 'senderEmail' => $this->email]);
    }
}
