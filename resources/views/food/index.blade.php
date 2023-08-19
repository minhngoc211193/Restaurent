@extends('background.main')
@section ('content')
<div class="container mt-3">
  <h2>Menu</h2>       
  <table class="table table-bordered">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Type</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @isset($foods)
    @foreach($foods as $food)
        <tr>
            <td>{{ $food->id }}</td>
            <td>{{ $food->type->name }}</td>
            <td>{{ $food->name }}</td>
            <td><img src="http://127.0.0.1:8000{{ $food->image}}"></td>
            <td>{{ $food->description }}</td>
            <td>{{ $food->price }}</td>
            <td>
                <a href="/foods/{{$food->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('foods.destroy', $food->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach
    @else
        <tr><td>
            Not have food
        </td></tr>
    @endif
  </table>
</table>
<p>
        <a href="/foods/create" class="btn btn-success">Add New Food</a>
      </p>
@endsection