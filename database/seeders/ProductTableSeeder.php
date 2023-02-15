<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i<30; $i++){
            $product_name = $faker->sentence(2);
            $slug = Str::slug($product_name);
            $product = Product::create([
                'slug' => $slug,
                'product_name' => $product_name,
                'description' => $faker->sentence(20),
                'price' => $faker->randomFloat(3,1,20)
            ]);

            $detail = $product->detail()->create([
                'goster_slider' => rand(0,1),
                'goster_gunun_firsati' => rand(0,1),
                'goster_one_cikan' => rand(0,1),
                'goster_cok_satan' => rand(0,1),
                'goster_indirimli' => rand(0,1)
            ]);
        }
    }
}
