<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
       $products_count = Product::all()->count();
       $users_count = User::all()->count();

        return view('admin.index', [
            'products_count' => $products_count,
            'users_count' => $users_count
        ]);
   }
}
