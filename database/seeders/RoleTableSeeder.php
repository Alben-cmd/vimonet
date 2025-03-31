<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserType::create([
            'name' => 'admin'
        ]);

        UserType::create([
            'name' => 'patient'
        ]);

        UserType::create([
            'name' => 'specialist'
        ]);

        UserType::create([
            'name' => 'triad'
        ]);
    }
}
