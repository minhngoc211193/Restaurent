@extends('background.main')
@section ('content')
<form action="/types" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <input type="submit" value="Create">
</form>
@endsection