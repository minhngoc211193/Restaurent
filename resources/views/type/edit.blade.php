@extends('background.main')
@section ('content')
<form action="/types/{{$type->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$type->name}}">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image" value="{{$type->image}}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{$type->description}}"><br>
    <br>
    <input type="submit" value="Update">
</form>
@endsection