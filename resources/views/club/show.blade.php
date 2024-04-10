<head>
    <title>Bag {{$bag->nickname}}</title>
</head>

<div>
    <a href="{{route('bags.index')}}">All Bags</a>
</div>

<div>
    <h2>{{$bag->nickname}}</h2>
    <h3>{{$bag->make}}</h3>
    <h3>{{$bag->model}}</h3>
    <p>{{$bag->created_at}}</p>
    <p>{{$bag->updated_at}}</p>
</div>
