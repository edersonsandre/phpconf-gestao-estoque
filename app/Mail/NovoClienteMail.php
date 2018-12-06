<?php

namespace App\Mail;

use App\Clientes;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NovoClienteMail extends Mailable
{
    use Queueable, SerializesModels;
    private $cliente;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Clientes $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.novo-cliente')->with('cliente', $this->cliente);
    }
}
