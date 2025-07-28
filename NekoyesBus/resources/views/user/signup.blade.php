<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Signup</title>
        <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    </head>
    <body>
        <x-layout>
            <div class="signupBody">
                <div class="signupform">
                    <form action="/signup" method="Post">
                        @csrf
                        <h2>Sign up</h2>
                        <label for="">First name:
                            <input type="text" name="first_name" placeholder="First name">
                        </label>
                        <label for="">
                            Last name:
                            <input type="text" name="last_name" placeholder="Last name">
                        </label>
                        <label for="">
                            E-mail:
                            <input type="email" name="email" placeholder="E-mail">
                        </label>
                        <label for="">
                            Password:
                            <input type="password" name="password" placeholder="Password">
                        </label>
                        <label for="">
                            Confirmation:
                            <input type="password" name="password_confirmation" placeholder="Confirmation">
                        </label>
                        <input type="submit" value="Submit" id="sub1">
                        <a href="/signin">
                            <p>Sign in</p>
                        </a>
                    </form>
                </div>
            </div>

        </x-layout>
        </div>
    </body>
</html>