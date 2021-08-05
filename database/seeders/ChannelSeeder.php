<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Channel::create([
            'user_id' => 1,
            'name' => 'TeezerPlay',
        ]);
    }
}
