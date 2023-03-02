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
          /*  ['category_name' => 'Siyaset' , 'slug' => 'siyaset', 'categories' => [
              //  ['category_name' => 'Computer/Tablet' , 'slug' => 'computer/tablet'],
                //['category_name' => 'Phone' , 'slug' => 'phone'],
                //['category_name' => 'Television' , 'slug' => 'television']
            ]],
            ['category_name' => 'Ekonomi' , 'slug' => 'ekonomi', 'categories' => [
                //  ['category_name' => 'Literature' , 'slug' => 'literature'],
                //   ['category_name' => 'Novels' , 'slug' => 'novels']
            ]],*/
            ['category_name' => 'Siyaset' , 'slug' => 'siyaset'],
            ['category_name' => 'Ekonomi' , 'slug' => 'ekonomi'],
            ['category_name' => 'Magazin' , 'slug' => 'magazin'],

        ];

        foreach($categories as $category) {
            $cat = Category::firstOrCreate([
                'slug' => $category['slug']
            ], [
                'category_name' => $category['category_name']
            ]);
        }
    }
}
