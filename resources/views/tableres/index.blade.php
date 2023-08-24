@extends('background.main')
@section ('content')
<div class="container mt-3">
  <h2 style="text-align: center;">List of Table</h2>
  <h2>
        <a href="/tablereses/create" class="bi bi-plus-circle" style="width: 45px; height: 43px;"></a>
</h2>       
  <table class="table table-bordered">
    <thead>
    <tr style="border:1px solid">
        <th>View</th>
        <th>Manager</th>
        <th>Customer</th>
        <th>Phone</th>
        <th>Order</th>
        <th>Action</th>
    </tr>
</thead>
    <tbody>
    @foreach($tablereses as $tableres)

        <tr>
            <td><a href="/tablereses/{{$tableres->id}}">{{ $tableres->view }}</a></td>
            <td>{{$tableres->employee->name}}</td>
            <td>{{$tableres->customer}}</td>
            <td>{{$tableres->phone}}</td>
            <td>
              @foreach($tableres->foods as $food)
              <a href="/foods/{{$food->id}}">{{ $food->name }}</a>
              @endforeach
            </td>
            <td>
                <a href="/tablereses/{{$tableres->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('tablereses.destroy', $tableres->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr> 
    @endforeach
</tbody>
</table>

@endsection
