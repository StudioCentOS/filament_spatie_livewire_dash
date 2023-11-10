<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin', 'User'];

        foreach ($roles as $roleName) {
            // Aggiungi un controllo per vedere se il ruolo esiste già prima di crearlo
            if (Role::where('name', $roleName)->doesntExist()) {
                Role::create(['name' => $roleName]);
            }
        }
    }
}
