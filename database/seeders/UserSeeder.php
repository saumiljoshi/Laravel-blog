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
      return DB::table('categories')->insert([
            'name' =>'politics',
            'description'=>'politics',
        ]);
    }
}
