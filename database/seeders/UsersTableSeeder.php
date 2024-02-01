<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            'name' => 'Dave Samojlenko',
            'email' => 'dsamojlenko@gmail.com',
            'password' => \Hash::make('password'),
        ]);

        \DB::table('users')->insert([
            'name' => 'Phil Samojlenko',
            'email' => 'psamojlenko@gmail.com',
            'password' => \Hash::make('password'),
        ]);
    }
}
