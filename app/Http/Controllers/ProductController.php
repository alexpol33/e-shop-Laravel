<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($cat, $prod_id){
        $item =  Product::find($prod_id);

        return view('product.show', compact('item'));
    }

    public function showCategory(){

    }
}
