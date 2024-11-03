<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Categories::whereNull('parent')
            ->with('childrenRecursive')
            ->get();

        $products = Products::all();

        return view('dashboard.home', compact('products', 'categories'));
    }
}
