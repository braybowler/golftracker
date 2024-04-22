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
        <h3>Nickname: {{$bag->nickname}}</h3>
        <p>Make: {{$bag->make}}</p>
        <p>Model: {{$bag->model}}</p>
        <p>Clubs in the bag: <a href="{{route('bag.clubs.index', $bag)}}">{{$bag->clubs_count}}</a></p>
        <a href="{{route('bags.show', $bag)}}">View Bag Details</a>
        <a href="{{route('bags.edit', $bag)}}">Edit Bag</a>
        <form action="{{route('bags.destroy', $bag)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete Bag">
        </form>
    </div>
@endforeach
