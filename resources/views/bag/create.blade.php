<head>
    <title>Add a Bag</title>
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

<form action="{{route('bags.store')}}" method="POST">
    @csrf
    <div>
        <label for="nickname">Nickname:</label>
        <input type="text" name="nickname" id="nickname" value="{{old('nickname')}}"/>
    </div>
    <div>
        <label for="make">Make:</label>
        <input type="text" name="make" id="make" value="{{old('make')}}"/>
    </div>
    <div>
        <label for="model">Model:</label>
        <input type="text" name="model" id="model" value="{{old('model')}}"/>
    </div>
    <div>
        <input type="submit" value="Add Bag"/>
    </div>
</form>
