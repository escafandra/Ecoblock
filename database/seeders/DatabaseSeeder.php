<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
            ProjectSeeder::class,
            ProductProjectSeeder::class,
        ]);

        User::factory()->create([
            'name' => env('ADMIN_NAME', 'admin'),
            'email' => env('ADMIN_MAIL', 'admin@ecoblock.com.co'),
        ]);
    }
}
