<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GolfTracker - Login</title>
    </head>

    <body>
        <div>
            <h1>Welcome to GolfTracker</h1>
            <h2>Registered before? Login below: </h2>
            <form method="POST" action="{{ route('login.login') }}"
                @csrf
                <label for="emailInput">Email:</label>
                <input id="emailInput" name="email" type="email"/>
                <label for="passwordInput">Password:</label>
                <input id="passwordInput" name="password" type="password"/>
                <input type="submit" value="Login"/>
            </form>
        </div>
        <div>
            <h2>Haven't registered yet? Visit our registration page 
                <a href={{ route('register.register') }}>here</a>.
            </h2>
        </div>
    </body>
</html>
