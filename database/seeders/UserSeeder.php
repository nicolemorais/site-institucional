<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Contact;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
           0 => [
                'name' => 'João da Silva',
                'email' => 'js@mail.com',
                'password' => '111111',
                'image' => '',
            ],
            
           1 => [
                'name' => 'Paulo da Costa',
                'email' => 'pc@mail.com',
                'password' => '222222',
                'image' => '',
            ],

            2 => [
                'name' => 'Maria da Costa',
                'email' => 'mc@mail.com',
                'password' => '333333',
                'image' => '',
            ],

            3 => [
                'name' => 'José das Cove',
                'email' => 'jc@mail.com',
                'password' => '444444',
                'image' => '',
            ],

            4 => [
                'name' => 'Marco Prates',
                'email' => 'mp@mail.com',
                'password' => '555555',
                'image' => '',
            ],

            5 => [
                'name' => 'Gilmar Tello',
                'email' => 'gt@mail.com',
                'password' => '6666666',
                'image' => '',
            ],

            6 => [
                'name' => 'Eliane Pittman',
                'email' => 'ep@mail.com',
                'password' => '77777777',
                'image' => '',
            ],

            7 => [
                'name' => 'Lucia Verissimo',
                'email' => 'lv@mail.com',
                'password' => '8888888',
                'image' => '',
            ],

            8 => [
                'name' => 'Ana de Souza',
                'email' => 'as@mail.com',
                'password' => '9999999',
                'image' => '',
            ],

            9 => [
                'name' => 'Sérgio Alves',
                'email' => 'sa@mail.com',
                'password' => '10101010',
                'image' => '',
            ],
        ];

    foreach ($users as $user) {
        User::create(array(
            'name' => $user['name'],
            'email' => $user['email'],
            'password'=> $user['password'],
            'image' => $user['image'],
        ));
    }
    }
}
