<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fulano de Tal',
            'email' => 'fulano@gmail.com',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'aiaiai',
            'email' => 'augusto@gmail.com',
            'password' => '123456'
        ]);
    }
}
