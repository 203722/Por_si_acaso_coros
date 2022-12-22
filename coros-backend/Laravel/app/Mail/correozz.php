<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class correo extends Mailable
{
    use Queueable, SerializesModels;

    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this -> mensaje = $mensaje;
    }

    /**
     * 
     *
     * @return $this
     */
    public function build()
    {

    }

}
