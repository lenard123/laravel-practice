<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function show()
    {
        $products = Product::all();

        return view('home', [
            'products' => $products
        ]);
    }
}
