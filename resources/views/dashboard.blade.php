<head>
    <title>GolfTracker - Dashboard</title>
</head>

<p>Hi, {{auth()->user()->name}}</p>

<a href="{{route('golfbags.show')}}">My Golf Bag</a>
<a href="{{route('logout.show')}}">Logout</a>
