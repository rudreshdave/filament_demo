<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@yopmail.com',
            'password' => Hash::make("test123")
        ]);

        $role = Role::create(['name' => 'Admin']);

        $user->assignRole($role);

        $user2 = User::factory()->create([
            'name' => 'Rudresh Dave',
            'email' => 'rudresh.dave@yopmail.com',
            'password' => Hash::make("Rudr3esh123*")
        ]);
        $role2 = Role::create(['name' => 'User']);
        $user2->assignRole($role2);

    }
}
