<?php
namespace App\Services;

use App\Models\Categories;

class CategoriesService
{
    public function getCategoriesTree($id): array
    {
        $arrId          = explode(',', $id);

        $categories     = Categories::whereIn('id', $arrId)->get();

        $categoriesTree = [];

        foreach ($categories as $category) {
            $category->children = $this->getAllChildCategories($category->id);
            $categoriesTree[]   = $category;
        }

        return $categoriesTree;
    }

    public function getAllChildCategories($categoryId)
    {
        $childCategories = Categories::where('parent', $categoryId)->get();

        foreach ($childCategories as $childCategory) {
            $childCategory->children = $this->getAllChildCategories($childCategory->id);
        }

        return $childCategories;
    }

}
