@extends('background.main')
@section ('content')
{{$food->id}}<br>
{{$food->name}}<br>
{{$food->image}}<br>
{{$food->description}}<br>
{{$food->price}}<br>
@endsection
