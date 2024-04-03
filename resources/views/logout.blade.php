<head>
    <title>Logout of GolfTracker</title>
</head>

<p>Are you sure you'd like to log out?</p>

<a href="{{route('dashboard')}}">Back to GolfTracker</a>

<form action="{{route('logout.logout')}}" method="POST">
    @csrf
    <div>
        <input type="submit" value="Logout"/>
    </div>
</form>
