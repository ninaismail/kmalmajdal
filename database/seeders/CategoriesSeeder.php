<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert data into the 'categories' table
        DB::table('categories')->insert([
            [
                'name' => 'coffee',
                'image' => 'public\\categories\\coffee.jpg',
                'href' => 'category-coffee',
            ],
            [
                'name' => 'fruits',
                'image' => 'public\\categories\\fruits.jpg',
                'href' => 'category-fruits',
            ],
        ]);
    }
}
