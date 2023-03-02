<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\User;

class ProductController extends Controller
{
    public function index($slug_productname){
        $product = Product::where('slug', $slug_productname)->firstorFail();
        $categories = $product->categories()->distinct()->get();



        $categorys = Category::whereRaw('up_id is null')->get();

        $product_goster_one_cikan = ProductDetail::with('product')->where('goster_one_cikan', 1)->take(4)->get();
        $product_goster_cok_satan = ProductDetail::with('product')->where('goster_cok_satan', 1)->take(4)->get();

        return view('frontend.guncel', compact('product','categories','categorys','product_goster_one_cikan','product_goster_cok_satan'));
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
