<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sites.contato');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cidade_uf' => 'required',
            'nome_representante' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'assunto' => 'required',
            'msg' => 'required'
        ]);

        //POO = Recebe as informações de ContratarForm atráves da variável $contratar e tenta enviar para o email
        //Se tudo ocorrer corretamente imprime a mensagem de sucesso, caso contrário imprime a mensagem de erro
        $contratar = new ContatoForm($request);

        try {
            $contratar-> sendMail();

             return back()
                ->with('success', 'success');

        } catch (\Throwable $error) {

            return back()
                ->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");
        }
    }
}
