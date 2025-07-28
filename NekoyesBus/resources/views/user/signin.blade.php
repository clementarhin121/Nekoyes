<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in</title>
        <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    </head>
    <body>
        <x-layout>
            <div class="signinBody">
                <div class="signinform">
                    <form action="/signin" method="Post">
                        @csrf
                        <h2>Sign in</h2>
                        <label for="">
                            E-mail:
                            <input type="email" name="email" placeholder="E-mail">
                        </label>
                        <label for="">
                            Password:
                            <input type="password" name="password" placeholder="Password">
                        </label>
                        <input type="submit" value="Submit" id="sub1">
                        <a href="/signup">
                            <p>Sign Up</p>
                        </a>
                    </form>

                </div>
            </div>

        </x-layout>



    </body>
</html>