@extends('background.main')
@section ('content')
<div class="container mt-3">
  <h2>List of Table</h2>       
  <table class="table table-bordered">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>View</th>
        <th>Manager</th>
        <th>Order</th>
        <th>Action</th>
    </tr>
    @foreach($tablereses as $tableres)
        <tr>
            <td>{{ $tableres->id }}</td>
            <td>{{ $tableres->view }}</td>
            <td>{{$tableres->employee->name}}</td>
            <td>{{$tableres->food->name}}</td>
            <td>
                <a href="/tablereses/{{$tableres->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('tablereses.destroy', $tableres->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
  </table> 
    @endforeach
</table>
<p>
        <a href="/tablereses/create" class="btn btn-success">Add New Tableres</a>
      </p>
@endsection
