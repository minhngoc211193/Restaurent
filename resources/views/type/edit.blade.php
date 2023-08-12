<form action="/types/{{$type->id}}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$type->name}}">
    <br>
    <input type="submit" value="Update">
</form>