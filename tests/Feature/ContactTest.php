<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function test_user_can_read_all_the_contacts()
    {

        $contact = Contact::factory()->create();

        $response = $this->get('/');
        $response->assertSee($contact->name);
    }

    /** @test */
    public function test_user_can_read_one_contact()
    {

        $contact = Contact::factory()->create();

        $response = $this->get('/detail/' . $contact->id);
        $response->assertSee($contact->name);
    }

    /** @test */
    public function test_user_can_create_a_new_contact()
    {

        $contact = Contact::factory()->make();

        $this->post('/create', $contact->toArray())->assertRedirect('/');
    }

   
}
