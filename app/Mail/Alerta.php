<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Alerta extends Mailable
{
    use Queueable, SerializesModels;

    public $alerta;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Alerta $alerta)
    {
        $this->alerta = $alerta;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  public function build()
    {
        return $this->view('mails.index');
    }
}
