<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug_productname){
        $product = Product::where('slug', $slug_productname)->firstorFail();
        $categories = $product->categories()->distinct()->get();
        return view('urun', compact('product','categories'));
    }

    public function search(){
        $aranan = request()->input('aranan');
        $products = Product::where('product_name', 'like', "%$aranan%")
            ->orWhere('description', 'like', "%$aranan%")
            ->paginate(10);

        request()->flash();

        return view('arama', compact('products'));
    }
}
