<?php

namespace App\Helpers\DataBuilders;

class ContactDataBuilder {
    private $C = [
        ['user_id' => '1','subject' => 'Teste 1','body' => 'Testando mandar mensagem 1','visible' => '1'],
        ['user_id' => '2','subject' => 'Teste 2','body' => 'Testando mandar mensagem 2','visible' => '0'],
        ['user_id' => '3','subject' => 'Teste 3','body' => 'Testando mandar mensagem 3','visible' => '1']
    ];

    public function getData(){

        return $this->$C;
     }

     public function getRow(){
        $C = [ 'user_id' => '5',
        'subject' => 'Teste 5',
        'body' => 'Testando mandar mensagem 5',
        'visible' => '1',];

        return $C;
    }
}

?>