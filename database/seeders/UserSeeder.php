<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@teezerplay.com',
            'password' => bcrypt('TeezerPlay1234.com'),
            'remember_token' => Str::random(10)
        ]);

    }
}
