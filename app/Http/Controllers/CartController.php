<?php

namespace App\Http\Controllers;

use App\Models\CartProducts;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index(){
        $cartStorage = Cart::content();
        $cartContent = $cartStorage->map(function ($item) {
            $product = Product::find($item->id);
            $item->product = $product->toArray();
            return $item;
        });

        return view('sepet')->with(['cartContent' => $cartContent]);
    }

    public function add(){
        $product = Product::find(request('id'));
        $cartItem = Cart::add($product->id, $product->product_name, 1, $product->price);

        $active_cart_id = session('active_cart_id');
        if (!isset($active_cart_id)) {
            $active_cart = \App\Models\Cart::create([
                'code' => Str::random(20)
            ]);
            $active_cart_id = $active_cart->id;
            session()->put('active_cart_id', $active_cart_id);
        }

        CartProducts::updateOrCreate(
            ['cart_id'=>$active_cart_id, 'product_id'=>$product->id],
            ['number'=>$cartItem->qty, 'price'=>$product->price, 'status'=>'Beklemede']
        );

        return redirect()->route('cart')
            ->with('message_type','success')
            ->with('message','Product added to cart.');
    }

    public function remove($rowid){
        Cart::remove($rowid);

        return redirect()->route('cart')
            ->with('message_type','success')
            ->with('message','Product removed to cart.');
    }

    public function destroy(){
        Cart::destroy();

        return redirect()->route('cart')
            ->with('message_type','success')
            ->with('message','All products destroy to cart.');
    }

    public function update($rowid){
        Cart::update($rowid, request('number'));

        session()->flash('message_type', 'success');
        session()->flash('message', 'Updated');

        return response()->json(['success'=>true]);
    }
}
