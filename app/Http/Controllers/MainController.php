<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;

class MainController extends Controller
{
    public function index(){
        $categories = Category::whereRaw('up_id is null')->get();

        $product_slider = ProductDetail::with('product')->where('goster_slider', 1)->take(5)->get();

        $product_gunun_firsati = Product::select('products.*')
            ->join('product_details','product_details.product_id','product_id')
            ->where('product_details.goster_gunun_firsati',1)
            ->orderBy('updated_at','desc')
            ->first();

        $product_goster_one_cikan = ProductDetail::with('product')->where('goster_one_cikan', 1)->take(4)->get();
        $product_goster_cok_satan = ProductDetail::with('product')->where('goster_cok_satan', 1)->take(4)->get();
        $product_goster_indirimli = ProductDetail::with('product')->where('goster_indirimli', 1)->take(4)->get();

        return view('anasayfa',compact('categories','product_slider','product_gunun_firsati',
            'product_goster_one_cikan','product_goster_cok_satan','product_goster_indirimli'));
    }
}
