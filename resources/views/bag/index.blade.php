<head>
    <title>My Bags</title>
</head>

<div>
    <a href="{{route('dashboard')}}">Dashboard</a>
</div>

<div>
    <a href="{{route('bags.create')}}">Add a New Bag</a>
</div>

@foreach($bags as $bag)
    <div>
        <h3>{{$bag->nickname}}</h3>
        <p>{{$bag->make}}</p>
        <p>{{$bag->model}}</p>
    </div>
@endforeach
