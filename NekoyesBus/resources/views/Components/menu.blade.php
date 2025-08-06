<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{ asset('js/menu.js') }}" defer></script>

        <style>
            .fa-cart-shopping {
                color: rgba(255, 255, 255, 0.769);
            }
        </style>
    </head>
    <body>
        <div class="menuBody">
            <div class="topMenu">
                <div class="logo">
                    <a href="/">
                        <h2>Nekoyes.Buz</h2>
                    </a>
                </div>
                <div class="user">
                    <div class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>{{ $totalPurchases }}</p>
                    </div>
                </div>
                <div class="userIcon">
                    <div class="usersbody"> @guest
                    <i class="fa-regular fa-user"></i> @else
                            <img src="{{ Auth::user()->profilepic }}" alt="">
                        @endguest
                    </div>
                    <div class="sino">
                        @guest
                            <a href="/signup">
                                <p>Signup</p>
                            </a>/
                            <a href="/signin">
                                <p>Sign in</p>
                            </a>
                        @else
                            <form method="POST" action="/logout" id="logout">
                                @csrf
                            </form>
                            <button type="submit" form="logout">Logout</button>

                        @endguest
                    </div>
                </div>
                <div class="burger">
                    <div class="lanes">
                        <div class="lane1"></div>
                        <div class="lane2"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="popBody">
            <div class="itemization">
                <ul>
                    <a href="/products">
                        <li id="l1">Products</li>
                    </a>
                    <li id="l2">Logistics</li>
                    <li id="l3">Calendar</li>
                    <li id="l4">Connect</li>
                </ul>
            </div>
        </div>
    </body>
</html>