<?php

namespace App\Services;

use App\Models\Products;

class ProductsService
{
    public function createProduct($data){

        $product = Products::create([
            'name' => $data['name_product'],
            'price' => $data['price'],
            'stock' => $data['stock'],
        ]);

        if (!empty($data['categories'])) {
            $product->categories()->sync($data['categories']);
        }

        if (!empty($data['tags'])) {
            $product->tags()->sync($data['tags']);
        }

        return $product;
    }

    public function updateProduct($id, $data)
    {
        $product = Products::query()->findOrFail($id);

        $product->update([
            'name' => $data['name_product'],
            'price' => $data['price'],
            'stock' => $data['stock'],
        ]);

//        dd($data['categories']);
        if (!empty($data['categories'])) {
            $product->categories()->sync($data['categories']);
        } else {
            $product->categories()->sync([]);
        }

        if (!empty($data['tags'])) {
            $product->tags()->sync($data['tags']);
        } else {
            $product->tags()->sync([]);
        }
    }
}
