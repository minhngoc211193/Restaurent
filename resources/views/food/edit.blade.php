<form action="/foods/{{$food->id}}" method="post">
    @method('PUT')
    @csrf
    <select name="type_id" id="type_id">
        @foreach($types as $type)
            <option value="{{$type->id}}" @if($type->id == $food->type_id) selected @endif>{{$type->name}}</option>
        @endforeach
    </select>
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$food->name}}">
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$food->description}}">
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{$food->price}}">
    <br>
    <input type="submit" value="Update">
</form>