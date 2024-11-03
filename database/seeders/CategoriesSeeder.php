<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics', 'parent' => null, 'depth' => 0],
            ['name' => 'Clothing', 'parent' => null, 'depth' => 0],
            ['name' => 'Home & Kitchen', 'parent' => null, 'depth' => 0],

            ['name' => 'Mobile Phones', 'parent' => 1, 'depth' => 1],
            ['name' => 'Laptops', 'parent' => 1, 'depth' => 1],
            ['name' => 'Men\'s Clothing', 'parent' => 2, 'depth' => 1],
            ['name' => 'Women\'s Clothing', 'parent' => 2, 'depth' => 1],
            ['name' => 'Furniture', 'parent' => 3, 'depth' => 1],
            ['name' => 'Kitchen Appliances', 'parent' => 3, 'depth' => 1],

            ['name' => 'Smartphones', 'parent' => 4, 'depth' => 2],
            ['name' => 'Feature Phones', 'parent' => 4, 'depth' => 2],
            ['name' => 'Gaming Laptops', 'parent' => 5, 'depth' => 2],
            ['name' => 'Business Laptops', 'parent' => 5, 'depth' => 2],
            ['name' => 'T-Shirts', 'parent' => 6, 'depth' => 2],
            ['name' => 'Jeans', 'parent' => 6, 'depth' => 2],
            ['name' => 'Dresses', 'parent' => 7, 'depth' => 2],
            ['name' => 'Tops', 'parent' => 7, 'depth' => 2],
            ['name' => 'Sofas', 'parent' => 8, 'depth' => 2],
            ['name' => 'Beds', 'parent' => 8, 'depth' => 2],
            ['name' => 'Cookware', 'parent' => 9, 'depth' => 2],
            ['name' => 'Blenders', 'parent' => 9, 'depth' => 2],

            ['name' => 'Android Phones', 'parent' => 10, 'depth' => 3],
            ['name' => 'iPhones', 'parent' => 10, 'depth' => 3],
            ['name' => 'Casual T-Shirts', 'parent' => 13, 'depth' => 3],
            ['name' => 'Formal T-Shirts', 'parent' => 13, 'depth' => 3],
            ['name' => 'Mini Blenders', 'parent' => 19, 'depth' => 3],
            ['name' => 'Professional Blenders', 'parent' => 19, 'depth' => 3],

            ['name' => 'Samsung', 'parent' => 21, 'depth' => 4],
            ['name' => 'Apple', 'parent' => 22, 'depth' => 4],
            ['name' => 'Portable Blenders', 'parent' => 26, 'depth' => 4],
            ['name' => 'Countertop Blenders', 'parent' => 26, 'depth' => 4],
        ];

        foreach ($categories as $category) {

            $res = Categories::query()->where(['name' => $category['name']])->first();

            if (!is_null($res)) {
                return;
            }

            Categories::create($category);

        }
    }
}
