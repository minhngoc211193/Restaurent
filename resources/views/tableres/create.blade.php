@extends('background.main')
@section ('content')
<form action="/tablereses" method="post">
    @csrf
    <label for="view">View</label>
    <input type="text" name="view" id="view"><br>
    <label for="name">Manager</label>
    <select name="employee_id" id="employee_id">
        @foreach($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach
    </select><br>
    
    <br>
    <input type="submit" value="Create">
</form>
@endsection