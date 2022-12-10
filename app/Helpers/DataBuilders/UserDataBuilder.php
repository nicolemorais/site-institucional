<?php
 
 namespace App\Helpers\DataBuilders;

 class UserDataBuilder {
    private $V = [
        ['name' => 'João da Silva','email' => 'js@mail.com','password' => '111111','image' => ''],
        ['name' => 'Paulo da Costa','email' => 'pc@mail.com','password' => '222222','image' => ''],
        ['name' => 'Maria da Costa','email' => 'mc@mail.com','password' => '333333','image' => ''],
        ['name' => 'José das Cove','email' => 'jc@mail.com','password' => '444444','image' => ''],
        ['name' => 'Marco Prates','email' => 'mp@mail.com','password' => '555555','image' => ''],
        ['name' => 'Gilmar Tello','email' => 'gt@mail.com','password' => '6666666','image' => ''],
        ['name' => 'Eliane Pittman','email' => 'ep@mail.com','password' => '77777777','image' => ''],
        ['name' => 'Lucia Verissimo','email' => 'lv@mail.com','password' => '8888888','image' => ''],
        ['name' => 'Ana de Souza','email' => 'as@mail.com','password' => '9999999','image' => ''],
        ['name' => 'Sérgio Alves','email' => 'sa@mail.com','password' => '10101010','image' => ''],
    ];

    public function getData(){

        return $this->$V;
     }

    public function getRow(){
        $V = ['name' => 'Paulo da Costa',
        'email' => 'pc@mail.com',
        'password' => '222222',
        'image' => ''];

        return $V;
    }

 }

?>