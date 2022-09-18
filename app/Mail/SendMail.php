<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    //ENVIA INFORMAÇÃOES DE CONTATO
    public $informacoes;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($informacoes)
    {
        $this->informacoes = $informacoes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from ( config('mail.from.address') )
            ->subject('COMUNICADO DE CONTATO')
            ->view('parts.mensagem-contato')
            ->with('informacoes', $this->informacoes);
    }

}
