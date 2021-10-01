<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function addToCart(Request $request){
        $product = Product::where('id', (int)$request->id)->first();

        if(!isset($_COOKIE['cart_id'])) setcookie('cart_id', uniqid());
        $cart_id = $_COOKIE['cart_id'];
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
