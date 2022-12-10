<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact;
use App\Models\User;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts =[
            0 => [
                'user_id' => '1',
                'subject' => 'Teste 1',
                'body' => 'Testando mandar mensagem 1',
                'visible' => '1',
            ],

            1 => [
                'user_id' => '2',
                'subject' => 'Teste 2',
                'body' => 'Testando mandar mensagem 2',
                'visible' => '0',
            ],

            2 => [
                'user_id' => '3',
                'subject' => 'Teste 3',
                'body' => 'Testando mandar mensagem 3',
                'visible' => '1',
            ],
        ];
        foreach ($contacts as $contact) {
            Contact::create(array(
                'user_id' => $contact["user_id"],
                'subject' => $contact["subject"],
                'body' => $contact["body"],
                'visible'=> $contact["visible"]
            ));
    }
    }
}
