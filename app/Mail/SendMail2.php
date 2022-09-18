<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail2 extends Mailable
{
    use Queueable, SerializesModels;

    //ENVIA INFORMAÇÃOES PARA CONTRATAR
    public $informacoes2;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($informacoes2)
    {
        $this->informacoes2 = $informacoes2;
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
            ->subject('CONTRATAR SERVIÇOS')
            ->view('parts.mensagem-contratar')
            ->with('informacoes2', $this->informacoes2);
    }
}
