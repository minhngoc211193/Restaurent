@extends('background.main')
@section ('content')
{{$employee->id}}<br>
{{$employee->name}}<br>
{{$employee->gender}}<br>
{{$employee->birthday}}<br>
{{$employee->phone}}<br>
{{$employee->email}}<br>
{{$employee->address}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Table</th>
    </tr>
    @foreach($employee->tablereses as $tableres)
        <tr>
            <td>{{$tableres->id}}</td>
            <td>{{$tableres->view}}</td>
        </tr>
    @endforeach
</table>
@endsection
