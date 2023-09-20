<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run()
{
    Users::create([
        'name' => 'javed amin',
        'email' => 'javed@gmail.com',
        'password' => Hash::make('12345678'),
    ]);

    // Add more user records as needed.
}
}
