@extends('background.main')
@section ('content')
<div class="container mt-3">
  <h2>Employee</h2>       
  <table class="table table-bordered">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->address}}</td>
            <td>
                <a href="/employees/{{$employee->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach
  </table>
</table>
@endsection