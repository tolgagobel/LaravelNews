<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category_name' => 'Electronic' , 'slug' => 'electronic', 'categories' => [
                ['category_name' => 'Computer/Tablet' , 'slug' => 'computer/tablet'],
                ['category_name' => 'Phone' , 'slug' => 'phone'],
                ['category_name' => 'Television' , 'slug' => 'television']
            ]],
            ['category_name' => 'Book' , 'slug' => 'book', 'categories' => [
                ['category_name' => 'Literature' , 'slug' => 'literature'],
                ['category_name' => 'Novels' , 'slug' => 'novels']
            ]],
            ['category_name' => 'Magazine' , 'slug' => 'magazine'],
            ['category_name' => 'Furniture' , 'slug' => 'furniture'],
            ['category_name' => 'Decoration' , 'slug' => 'decoration'],
            ['category_name' => 'Cosmetic' , 'slug' => 'cosmetic'],
            ['category_name' => 'Clothing and Fashion' , 'slug' => 'clothing and fashion']
        ];

        foreach($categories as $category) {
            $cat = Category::firstOrCreate([
                'slug' => $category['slug']
            ], [
                'category_name' => $category['category_name']
            ]);
            foreach($category as $sub_category) {
                Category::firstOrCreate([
                    'slug' => $sub_category,
                    'up_id' => $cat->id
                ], [
                    'category_name' => $sub_category,
                ]);
            }
        }
    }
}
