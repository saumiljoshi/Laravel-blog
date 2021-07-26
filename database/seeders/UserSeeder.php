<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      return DB::table('posts')->insert([
            'title' =>'books',
            'description'=>'hey, i bought new books',
        ]);
    }
}
