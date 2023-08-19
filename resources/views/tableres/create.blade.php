@extends('background.main')
@section ('content')
<form action="/tablereses" method="post" >
    @csrf
    <label for="view">View</label>
    <input type="text" name="view" id="view"><br>
    <label for="name">Manager</label>
    <select name="employee_id" id="employee_id">
        @foreach($employees as $employee)
            <option value="{{$employee->id}}">{{$employee->name}}</option>
        @endforeach
    </select><br>
    <div class="form-group">
        <p> Menu</p>
        @foreach($foods as $food)
        <input type="checkbox" class="form-check-input" name="food[]" id="food" value ="{{$food->id}}">
        <label for="food" class="form-check-label" style="margin-right:3%">{{$food->name}}</label><br>
        @endforeach
    </div>
    <br>
    <input type="submit" value="Create">
</form>
@endsection