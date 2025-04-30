<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create an Admin
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'aldoyh@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);
    }
}
