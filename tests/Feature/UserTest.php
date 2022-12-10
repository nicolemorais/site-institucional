<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Helpers\DataBuilders\UserDataBuilder;
use App\Helpers\DataBuilders\ContactDataBuilder;
use App\Models\User;
use App\Models\Contact;


class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testDatabaseUser()
    {
        $this->assertDatabaseHas('users', ['email' => 'jc@mail.com']);
        $this->assertDatabaseHas('users', ['email' => 'pc@mail.com']);
        $this->assertDatabaseHas('users', ['id' => '1']);
        $this->assertDatabaseHas('users', ['id' => '5']);
        $this->assertDatabaseHas('users', ['name' => 'José das Cove']);
    }

    public function testDatabaseContact()
    {
        $this->assertDatabaseHas('contacts', ['user_id' => '1']);
        $this->assertDatabaseHas('contacts', ['user_id' => '2']);
        $this->assertDatabaseHas('contacts', ['user_id' => '3']);

        $this->assertDatabaseHas('contacts', ['subject' => 'Teste 1']);
        $this->assertDatabaseHas('contacts', ['subject' => 'Teste 2']);
        $this->assertDatabaseHas('contacts', ['subject' => 'Teste 3']);
    }


    public function testUpdateUsers(){
        $lucia = User::find(8);

        $this->assertEquals('Lucia Verissimo', $lucia['name']);

        $lucia['name'] = 'Lucia Maria';

        $lucia->save();

        $lu = User::find(8);

        $this->assertEquals('Lucia Maria', $lucia['name']);
    }

    public function testUpdateContact(){
        $subject = Contact::find(1);

        $this->assertEquals('Teste 1', $subject['subject']);

        $subject['subject'] = 'Teste de Update';

        $subject->save();

        $sub = Contact::find(1);

        $this->assertEquals('Teste de Update', $subject['subject']);
    }

}

