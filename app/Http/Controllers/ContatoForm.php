<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;


class ContatoForm extends Controller
{
    private $nome_empresa;
    private $cidade_uf;
    private $nome_representante;
    private $email;
    private $tel;
    private $assunto;
    private $msg;

    public function __construct(Request $request)
    {
        $this->nome_empresa = $request->nome_empresa;
        $this->cidade_uf = $request->cidade_uf;
        $this->nome_representante = $request->nome_representante;
        $this->email = $request->email;
        $this->tel = $request->tel; 
        $this->assunto = $request->assunto;    
        $this->msg = $request->msg;
    }

    public function sendMail()
    {
        
        $informacoes = array(
    
            'nome_empresa' => $this->nome_empresa,
            'cidade_uf' => $this->cidade_uf,
            'nome_representante' => $this->nome_representante,
            'email' => $this->email,
            'tel' => $this->tel,
            'assunto' => $this->assunto,
            'msg' => $this->msg
        );

        Mail::to( config('mail.from.address') )
            ->send( new SendMail($informacoes) );

    }

}

