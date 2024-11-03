<?php

namespace Database\Seeders;

use App\Models\Tags;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Products::all();
        $tags = Tags::all();

        foreach ($products as $product) {
            $randomTagIds = $tags->random(rand(1, 12))->pluck('id')->toArray();

            $product->tags()->syncWithoutDetaching($randomTagIds);
        }
    }
}
