<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function index(){
        if(!Auth::check()){
            if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
            $cart_id = $_COOKIE['cart_id'];
        }else{
            $cart_id = \auth()->id();
        }


        \Cart::session($cart_id);
        $products = \Cart::getContent();
        $products = $products->toArray();

        return view('cart.index', compact('products'));
    }

    public function addToCart(Request $request){
        $product = Product::where('id', (int)$request->id)->first();

        if(!Auth::check()){
            if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
            $cart_id = $_COOKIE['cart_id'];
        }else{
            $cart_id = \auth()->id();
        }


        \Cart::session($cart_id);

        \Cart::add([
            'id' => $product->id, // inique row ID
            'name' => $product->title,
            'price' => isset($product->new_price) ? $product->new_price : $product->price,
            'quantity' => (int) $request->qty,
            'attributes' => [
                'img' => isset($product->images[0]->name) ? $product->images[0]->name : 'no_image.png'
            ]
        ]);


        return response()->json(\Cart::getContent());
    }
}
