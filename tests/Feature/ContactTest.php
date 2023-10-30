<?php

namespace Tests\Feature;

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    public function testItCanRenderCreateView(): void
    {
        $response = $this->get(route('contact'));

        $this->assertGuest();
        $response->assertOk();
        $response->assertViewIs('contact');
    }
    public function testItCanStoreAProduct(): void
    {
        $response = $this->post(route('contact.store'), [
            'name' => 'Testing Name',
            'email' => 'testing@email.com',
            'message' => 'Testing message',
        ]);

        $response->assertRedirect();
        $this->assertGuest();
        $this->assertDatabaseCount('contacts', 1);

        $contact = Contact::first();

        $this->assertEquals('Testing Name', $contact->name);
        $this->assertEquals('testing@email.com', $contact->email);
        $this->assertEquals('Testing message', $contact->message);
    }
}
