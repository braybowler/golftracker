<head>
    <title>GolfTracker - Dashboard</title>
</head>

<p>Hi, {{auth()->user()->name}}</p>

<a href="{{route('bags.index')}}">My Bags</a>
<a href="{{route('logout.show')}}">Logout</a>
