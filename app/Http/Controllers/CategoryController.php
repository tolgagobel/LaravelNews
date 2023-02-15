<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index($slug_categoryname){
        $category = Category::where('slug', $slug_categoryname)->firstorFail();
        $subcategory = Category::where('up_id', $category->id)->get();

        $order = request('order');
        if ($order == 'coksatanlar'){
            $products=$category->products()
                ->distinct()
                ->join('product_details','product_details.product_id','products.id')
                ->orderBy('product_details.goster_cok_satan', 'desc')
                ->paginate(8);

        }elseif ($order == 'yeni'){
            $products=$category->products()
                ->distinct()
                ->orderByDesc('updated_at')
                ->paginate(8);
        }else {
            $products = $category->products()->distinct()->paginate(2);
        }
        return view('kategori',compact('category','subcategory','products'));
    }
}
