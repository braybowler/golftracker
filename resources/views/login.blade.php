<head>
    <title>Login to GolfTracker</title>
</head>

<a href="{{route('register.show')}}">Register</a>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('login.login')}}" method="POST">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="{{old('email')}}" />
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="{{old('password')}}" />
    </div>
    <div>
        <input type="submit" value="Login"/>
    </div>
</form>
