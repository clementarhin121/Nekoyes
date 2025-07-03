<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ShowP</title>
        <link rel="stylesheet" href="{{ asset('css/showP.css') }}">
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
            </div>
        </x-layout>




    </body>
</html>