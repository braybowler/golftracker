<head>
    <title>Add a Club</title>
</head>

<div>
    <a href="{{route('clubs.index')}}">All Clubs</a>
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

<form action="{{route('clubs.store')}}" method="POST">
    @csrf
    <div>
        <label for="type">Type:</label>
        <select name="type" id="type">
            @foreach(\App\Models\Club::TYPE_OPTIONS as $option)
                <option value="{{$option}}">{{$option}}</option>
            @endforeach
        </select>
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
        <label for="average_carry">Average Carry:</label>
        <input type="number" name="average_carry" id="average_carry" value="{{old('average_carry')}}"/>
    </div>
    <div>
        <label for="average_total">Average Total:</label>
        <input type="number" name="average_total" id="average_total" value="{{old('average_total')}}"/>
    </div>
    <div>
        <input type="submit" value="Add Club"/>
    </div>
</form>
