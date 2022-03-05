<?php

namespace Database\Seeders;

use App\Models\Team;
use Database\Factories\TeamFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserFactory::new()
            ->withPersonalTeam()
            ->create([
                'name' => 'Marco',
                'email' => 'marco@mail.com',
                'password' => bcrypt('123123'),
                'email_verified_at' => now(),
            ]);
    }
}
