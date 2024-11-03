<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\CategoriesService;

class CategoriesController extends Controller
{
    protected $categoriesService;

    public function __construct(CategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    public function show($id)
    {
        $arrId = explode(',', $id);

        $categories = [];

        foreach ($arrId as $productId) {
            $product = Products::find($productId);

            if ($product) {
                foreach ($product->categories as $category) {
                    if (!isset($categories[$category->id])) {
                        $categories[$category->id] = [
                            'category' => $category,
                            'products' => [],
                        ];
                    }
                    $categories[$category->id]['products'][] = $product->name;
                }
            }
        }

        $categories = array_values($categories);

        return view('categories.list_categories', compact('categories'));
    }

    public function tree($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categories = $this->categoriesService->getCategoriesTree($id);

        return view('categories.list_categories_tree', compact('categories'));
    }
}
