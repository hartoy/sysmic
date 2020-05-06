<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mandarmail extends Mailable
{
    use Queueable, SerializesModels;

  public $pruebaMail;

    public function __construct(PruebaMail $pruebaMail)
    {
        $this->pruebaMail = $pruebaMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contacto');
    }
}
