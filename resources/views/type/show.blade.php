@extends('background.main')
@section ('content')
{{$type->id}}<br>
{{$type->name}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @foreach($type->foods as $food)
        <tr>
            <td>{{$food->id}}</td>
            <td>{{$food->name}}</td>
            <td>{{$food->description}}</td>
        </tr>
    @endforeach
</table>
@endsection