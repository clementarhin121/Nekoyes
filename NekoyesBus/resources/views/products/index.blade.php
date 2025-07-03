<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    </head>
    <body>
        <x-layout>
            <div class="productBody">
                <nav class="prodsDet">
                    @foreach ($allProducts as $product)
                        <a href="/products/{{$product->product_id}}">
                            <ul>
                                <li>
                                    <h1>{{$product->product_name}}</h1>
                                </li>
                                <li><img width="100%" height="100%" src="{{ $product->product_image }}" alt=""></li>
                                <li>{{$product->product_location}}</li>
                                <li>${{ $product->product_price }}</li>
                            </ul>
                        </a>
                    @endforeach
                </nav>
            </div>
        </x-layout>




    </body>
</html>