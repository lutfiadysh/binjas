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
            'nip' => 123456,
            'name' => 'Operator',
            'date_of_birth' => now(),
            'role' => 'operator',
            'pangkat' => '',
            'kesatuan' => '',
            'gol' => 'I',
            'email' => 'operator@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('operator'),
        ]);
    }
}
