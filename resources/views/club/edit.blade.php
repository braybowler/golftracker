<head>
    <title>Edit Bag {{$bag->nickname}}</title>
</head>

<div>
    <a href="{{route('bags.index')}}">All Bags</a>
</div>

@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('bags.update', $bag)}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="nickname">Nickname: </label>
        <input type="text" name="nickname" id="nickname" value="{{$bag->nickname}}"/>
    </div>
    <div>
        <label for="make">Make: </label>
        <input type="text" name="make" id="make" value="{{$bag->make}}"/>
    </div>
    <div>
        <label for="model">Model: </label>
        <input type="text" name="model" id="model" value="{{$bag->model}}"/>
    </div>
    <div>
        <input type="submit" value="Save Bag">
    </div>
</form>
