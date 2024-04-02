<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GolfTracker - Register</title>
    </head>

    <body>
        <div>
            <h1>Welcome to GolfTracker</h1>
            <h2>We'll need some basic information to get you started: </h2>
            <form method="POST" action="{{ route('register.register') }}"
                @csrf
                <label for="emailInput">Email:</label>
                <input id="emailInput" name="email" type="email"/>
                <label for="passwordInput">Password:</label>
                <input id="passwordInput" name="password" type="password"/>
                <input type="submit" value="Register"/>
            </form>
        </div>
        <div>
            <h2>Already registered? Login
                <a href={{ route('login.login') }}>here</a>.
            </h2>
        </div>
    </body>
</html>
