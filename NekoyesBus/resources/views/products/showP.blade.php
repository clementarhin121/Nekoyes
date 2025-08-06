<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ShowP</title>
        <link rel="stylesheet" href="{{ asset('css/showP.css') }}">
        <script src="{{ asset('js/showP.js') }}" defer></script>
    </head>
    <body>
        <x-layout>
            <div class="showPBody">
                <nav class="showPDet">
                    <ul>
                        <li>
                            <h1>{{$ind->product_name}}</h1>
                        </li>
                        <li><img width="100%" height="100%" src="{{ $ind->product_image }}" alt=""></li>
                        <li>{{$ind->product_location}}</li>
                        <li>${{ $ind->product_price }}</li>
                    </ul>
                </nav>
                <div class="buyItem">
                    <form action="/product/{{ $ind->product_id }}/add" method="POST" id="purchase">
                        @csrf
                    </form>
                    <form action="/product/{{ $ind->product_id }}/reduce" method="POST" id="unpurchase">
                        @csrf
                    </form>
                    <button class="reduce" type="submit" form="unpurchase">
                        <h1 id="minus">-</h1>
                    </button>
                    <div class="quantity">
                        <h1 id="quant">{{ $quantity }}</h1>
                    </div>
                    <button class="increase" type="submit" form="purchase">
                        <h1 id="plus">+</h1>
                    </button>
                </div>

            </div>
        </x-layout>




    </body>
</html>