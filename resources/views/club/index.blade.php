<head>
    <title>My Clubs</title>
</head>

<div>
    <a href="{{route('dashboard')}}">Dashboard</a>
</div>

<div>
    <a href="{{route('clubs.create')}}">Add a New Club</a>
</div>

@foreach($clubs as $club)
    <div>
        <h3>Type: {{$club->type}}</h3>
        <p>Make: {{$club->make}}</p>
        <p>Model: {{$club->model}}</p>
        <p>Average carry: {{$club->average_carry}}</p>
        <p>Average total: {{$club->average_total}}</p>
        <a href="{{route('clubs.show', $club)}}">View Club Details</a>
        <a href="{{route('clubs.edit', $club)}}">Edit Club</a>
        <form action="{{route('clubs.destroy', $club)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete Club">
        </form>
    </div>
@endforeach
