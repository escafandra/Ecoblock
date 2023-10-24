<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered_only_for_an_admin(): void
    {
        $admin = User::factory()->create();

        $responseWithOutAuth = $this->get('/register');

        $responseWithOutAuth->assertStatus(302);

        $responseWhitAuth = $this->actingAs($admin)->get('/register');

        $responseWhitAuth->assertStatus(200);
        $responseWhitAuth->assertViewIs('auth.register');
    }

    public function test_only_an_admin_can_register_new_admins(): void
    {
        $responseWhitOutAuth = $this->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);
        $responseWhitOutAuth->assertStatus(302);

        $admin = User::factory()->create();

        $responseRedirectWhitAuth = $this->actingAs($admin)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);

        $newAdmin = User::where('email', 'test@example.com')->first();

        $responseRedirectWhitAuth->assertRedirect(route(RouteServiceProvider::SUCCESS_ADMIN_ADDED,$newAdmin));

        $responseViewWhitAuth = $this->actingAs($admin)->followingRedirects()->post('/register', [
            'name' => 'Test Admin 2',
            'email' => 'test2@example.com',
        ]);
        $responseViewWhitAuth->assertViewIs('auth.new-admin');

    }
    public function test_message_error_email_has_already_been_taken(): void
    {
        $admin = User::factory()->create();

        $responseRedirectWhitAuth = $this->actingAs($admin)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);

        $newAdmin = User::where('email', 'test@example.com')->first();

        $responseRedirectWhitAuth->assertRedirect(route(RouteServiceProvider::SUCCESS_ADMIN_ADDED,$newAdmin));

        $this->actingAs($admin)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
        ]);
        $errors = session('errors');
        $this->assertNotNull($errors);
        $this->assertEquals(['The email has already been taken.'], $errors->get('email'));

    }
}
