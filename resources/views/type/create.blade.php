@extends('background.main')
@section ('content')
<form action="/types" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description"><br>
    <br>
    <input type="submit" value="Create">
</form>
@endsection