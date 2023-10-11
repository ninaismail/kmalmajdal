<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // Insert data into the 'products' table
    DB::table('products')->insert([
        [
            'title' => 'كريمة المانجو',
            'description' => 'المكونات : زيت نخيل الصويا – زبدة كاكاو – حليب – كاكاو – سكر – بودرة المانجو – الوان ومنكهات طبيعية.',
            'image' => 'public\\products\\mango.jpg',
            'image2' => null,
            'image3' => null,
            'image4' => null,
            'href' => 'mango-cream',
            'price' => 150, 
        ],
        [
            'title' => 'كريمة القرفة',
            'description' => 'المكونات : زيوت نباتية ( زيت النخيل ) – سكر – مسحوق مصل الحليب – حليب كامل الدسم – قرفة – كاكاو – مستحلب ( ليستين فول الصويا إي ۳۲۲ ).',
            'image' => 'public\\products\\cinamon.jpg',
            'image2' => null,
            'image3' => null,
            'image4' => null,
            'href' => 'cinamon-cream',
            'price' => 130,    
        ],
        [
            'title' => 'كريمة الكابتشينو',
            'description' => 'المكونات : زيوت نباتية  (زيت النخيل ) – سكر – مسحوق مصل الحليب – حليب كامل الدسم – بروتين الحليب – كاكاو – قهوة – مستحلب ( ليستين فول الصويا إي ۳۲۲ ) – نكهات مماثلة للطبيعية.',
            'image' => 'public\\products\\cappuccino.jpg',
            'image2' => null,
            'image3' => null,
            'image4' => null,
            'href' => 'cappuccino-cream',
            'price' => 150,      
        ],
    ]);
    }
}
