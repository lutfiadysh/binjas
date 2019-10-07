<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Operator',
            'email' => 'operator@lavishkreate.com',
            'role' => 'operator',
            'email_verified_at' => now(),
            'password' => Hash::make('operator'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@lavishkreate.com',
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => Hash::make('user'),
        ]);
    }
}
