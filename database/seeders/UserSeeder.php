<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.it',
            'password' => bcrypt('123456789'),
        ]);
        $role2 = User::factory()->create([
            'name' => 'User',
            'email' => 'user@test.it',
            'password' => bcrypt('123456789'),
        ]);

        $role1->assignRole('Admin');
        $role2->assignRole('User');
    }
}
