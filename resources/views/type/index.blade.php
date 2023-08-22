@extends('background.main')
@section ('content')
<div class="container mt-3">
  <br>
  <br>
  <br>
  <br>
  <h2 style="text-align: center;">Type of types</h2> 
  <h2>
        <a href="/types/create" class="bi bi-plus-circle" style="width: 45px; height: 43px;"></a>
</h2>      
@foreach($types as $type)
            <div class="" style="display:inline-block; width: 25%; margin: 10px;">
                  <img src="http://127.0.0.1:8000{{ $type->image}}" width="268" height="400">
                    <div class="text-center p-4 position-relative mt-n5 mx-4">
                        <h4>{{$type->name}}</h4>
                        <a href="/types/{{$type->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('types.destroy', $type->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
                    </div>
            </div>
            @endforeach
</div>

@endsection


