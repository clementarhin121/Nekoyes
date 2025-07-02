<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view(
            'products.product',
            [
                'allProducts' => product::all()
            ]
        );
    }

    public function show(product $product)
    {
        return view('products/showP', [
            'ind' => $product
        ]);



    }


}
