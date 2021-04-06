<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
            'name'=>'Helmate 1',
            'price'=>'500',
            'category'=>'Helmate',
            'description'=>' A new one for  Bullet1',
            'gallery'=>'https://cdn.shopify.com/s/files/1/1459/5894/products/k3_sv_elements_2_large.jpg?v=1594964490',
            ],
             [
            'name'=>'Helmate 2',
            'price'=>'530',
            'category'=>'Helmate',
            'description'=>' A new one for  Bullet2',
            'gallery'=>'https://cdn.shopify.com/s/files/1/1459/5894/products/cd0a8943-49f6-4af7-a87a-97f6f50ec208_large.png?v=1594431738',
            ],
            [
                'name'=>'LED Lights1',
                'price'=>'630',
                'category'=>'Lights',
                'description'=>' A new LED Lights ',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZgi04rLdK7pGQMqY3U0L0HqaiVf1q60eJDw&usqp=CAU'
                ],
                [
                    'name'=>'LED LIGHTS  2',
                    'price'=>'530',
                    'category'=>'Lights',
                    'description'=>' A new one for  Bullet2',
                    'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgjlx-VyvblMlVU_5ZqOq4oO0v00LoJObMAg&usqp=CAU',
                    ],

            [
                'name'=>'Helmate 3',
                'price'=>'540',
                'category'=>'Helmate',
                'description'=>' A new one for  Bullet3',
                'gallery'=>'https://tiimg.tistatic.com/fp/1/006/492/2020-new-model-full-face-motorcycle-predator-helmet-155.jpg',
                ]
    
        ]);
    }
}
