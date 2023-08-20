@extends('background.main')
@section ('content')
    <div class="container mt-3">
  <h2>TYpe of foods</h2>       
  <table class="table table-bordered">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
      @foreach($types as $type)
        <tr>
            <td>{{ $type->id }}</td>
            <td> <a href="{{ route('types.show', $type->id) }}">{{$type->name}}</a></td>
            <td><img src="http://127.0.0.1:8000{{ $type->image}}" width="255" height="230"></td>
            <td>{{$type->description}}</td>
            <td>
                <a href="/types/{{$type->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('types.destroy', $type->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
  </table>
</div>
<p>
        <a href="/types/create" class="btn btn-success">Add New Type</a>
      </p>
@endsection


