<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->truncate();

        User::factory()
            ->count(99)
            ->create();

        // Create admin user
        User::factory()->admin()->create();

        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('123'),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'user1',
        //     'email' => 'user1@gmail.com',
        //     'password' => Hash::make('123'),
        // ]);
    }
}