<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered_for_an_user(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/register');

        $response->assertStatus(200);
        $response->assertViewIs('auth.register');
    }
    public function test_registration_screen_can_not_be_rendered_for_an_gest(): void
    {
        $response = $this->get('/register');

        $response->assertRedirect(route('login'));
    }

    public function test_an_user_can_register_new_users(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $newUser = User::where('email', 'test@example.com')->first();

        $response->assertRedirect(route('success-new-admin', $newUser));
    }
    public function test_a_new_user_view_can_show_info(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->followingRedirects()->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertViewIs('auth.new-admin')
            ->assertSee('Test Admin')
            ->assertSee('test@example.com');
    }

    public function test_message_error_email_has_already_been_taken(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->actingAs($user)->post('/register', [
            'name' => 'Test Admin',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $errors = session('errors');
        $this->assertNotNull($errors);
        $this->assertEquals(['The email has already been taken.'], $errors->get('email'));

    }
}
