<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Products::all();
        $categories = Categories::all();

        foreach ($products as $product) {

            $randomCategoryIds = $categories->random(rand(1, 5))->pluck('id')->toArray();

            $product->categories()->syncWithoutDetaching($randomCategoryIds);
        }
    }
}
