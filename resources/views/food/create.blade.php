<form action="/foods" method="post">
    @csrf
    <label for="name">Name</label>
    <select name="type_id" id="type_id">
        @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->name}}</option>
        @endforeach
    </select><br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description"><br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price">
    <br>
    <input type="submit" value="Create">
</form>