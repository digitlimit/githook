<?php

namespace Digitlimit\Githook\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Githook extends Mailable
{
    use Queueable, SerializesModels;

    public $payload;

    public $type;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(object $payload, string $type)
    {
        $this->payload = $payload;
        $this->type = ucwords(str_replace('_', ' ', $this->type));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('githook::mail.webhook');
    }
}
