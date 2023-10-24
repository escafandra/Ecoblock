<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DatabaseSeederTest extends TestCase
{
    use RefreshDatabase;

    public function testSuperadminUserIsCreated()
    {
        $this->artisan('db:seed');

        $this->assertDatabaseHas('users', [
            'name' => env('SUPERADMIN_NAME', 'Superadmin'),
            'email' => env('SUPERADMIN_MAIL', 'admin@ecoblock.com.co'),
        ]);
    }
}
