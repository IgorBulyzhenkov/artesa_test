<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Tags;
use App\Services\ProductsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    protected $productService;

    public function __construct(ProductsService $productService)
    {
        $this->productService = $productService;
    }

    public function newProductPage(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $tags = Tags::all();
        $categories = Categories::whereNull('parent')
            ->with('childrenRecursive')
            ->get();

        return view('products.new_product',[
            'route'         => route('products.store'),
            'tags'          => $tags,
            'categories'    => $categories,
        ]);
    }

    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $product = Products::query()->findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function store (Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name_product'  => ['required', 'string', 'max:255'],
            'price'         => ['required', 'numeric'],
            'stock'         => ['required', 'integer'],
            'tags'          => ['array'],
            'categories'    => ['required', 'array']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->productService->createProduct($request->all());

        return redirect(route('home'));
    }

    public function updatePage($id)
    {
        $product = Products::with(['categories', 'tags'])->findOrFail($id);

        $tags = Tags::all();
        $categories = Categories::whereNull('parent')
            ->with('childrenRecursive')
            ->get();

        return view('products.update_page', [
            'route'         => route('products.update', $id),
            'product'       => $product,
            'tags'          => $tags,
            'categories'    => $categories
        ]);
    }

    public function update($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name_product'  => ['required', 'string', 'max:255'],
            'price'         => ['required', 'numeric'],
            'stock'         => ['required', 'integer'],
            'tags'          => ['array'],
            'categories'    => ['required', 'array']
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $this->productService->updateProduct($id, $request->all());

        return redirect(route('home'));
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $product = Products::with(['tags', 'categories'])->findOrFail($id);

        $product->delete();

        return redirect(route('home'));
    }
}
