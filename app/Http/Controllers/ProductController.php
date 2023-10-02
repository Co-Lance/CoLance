<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $listproducts = \App\Models\Product::all();
        return view('product.index',compact('listproducts'));
    }
    
}
