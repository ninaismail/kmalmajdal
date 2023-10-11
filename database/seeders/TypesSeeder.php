<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the 'types' table
        DB::table('types')->insert([
            [
                'name' => '5kg',
                'href' => 'type-5kg',
            ],
            [
                'name' => '1kg',
                'href' => 'type-1kg',
            ],
        ]);    
    }
}
