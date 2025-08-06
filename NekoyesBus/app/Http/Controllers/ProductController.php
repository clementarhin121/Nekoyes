<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\purchase;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view(
            'products.index',
            [
                'allProducts' => product::all()
            ]
        );
    }

    public function show(product $product)
    {
        $purchase = purchase::where('product_id', $product->product_id)->first();
        $quantity = $purchase ? $purchase->quantity : 0;

        return view('products/showP', [
            'ind' => $product,
            'quantity' => $quantity
        ]);

    }

    public function purchase(product $product)
    {
        $existing_product = purchase::where('product_id', $product->product_id)->first();
        if (!$existing_product) {
            $new_purchase = purchase::create([
                'product_id' => $product->product_id,
                'quantity' => 1,
                'total_price' => $product->product_price
            ]);
        } else {
            $existing_product->quantity += 1;
            $existing_product->total_price += $product->product_price;
            $existing_product->save();
        }

        return back();

    }
    public function unpurchase(Product $product)
    {
        $existing_product = Purchase::where('product_id', $product->product_id)->first();

        if ($existing_product) {
            if ($existing_product->quantity > 1) {
                $existing_product->quantity -= 1;
                $existing_product->total_price = max(0, $existing_product->total_price - $product->product_price);
                $existing_product->save();
            } else {
                $existing_product->delete();
            }
        }

        return back();
    }

}
