<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'Super',
            'lastname' => 'Admin',
            'role_id' => 1,
            'email' => 'superadmin@yes.com',
            'phone' => '07012345678',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'firstname' => 'Patient',
            'lastname' => 'User',
            'role_id' => 2,
            'email' => 'patient@yes.com',
            'phone' => '07092345678',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'firstname' => 'Specialist',
            'lastname' => 'User',
            'role_id' => 3,
            'email' => 'specialist@yes.com',
            'phone' => '07082345678',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'firstname' => 'Triad',
            'lastname' => 'Officer',
            'role_id' => 4,
            'email' => 'triad@yes.com',
            'phone' => '07072345678',
            'password' => Hash::make('password'),
        ]);
    }
}
