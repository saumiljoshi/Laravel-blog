<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                 'name' => 'saumil joshi',
                 'email' => 'saumil@gmail.com',
                 'password' => Hash::make('qwerty123'),
                 'phone_no' => '329472394',
                 'address' => 'Bhavnagar',
                 'city' => 'Bhavnagar',
                 'state' => 'gujarat',
                 'zip' => '1246',
                 'role' => 'admin', 
                ]);
    }
 
}

