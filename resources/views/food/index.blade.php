@extends('background.main')
@section ('content')
@isset($foods)
<div class="container-fluid product py-5 my-5" style="text-align:center">
<h2>
        <a href="/foods/create" class="bi bi-plus-circle" style="width: 45px; height: 43px;"></a>
</h2>
        <div class=" center-container">
                <p class="fs-5 fw-medium fst-italic text-primary">Menu</p>
                <h1 class="display-6"> Chọn món đi</h1>
            </div>
            @foreach($foods as $food)
            <div class="" style="display:inline-block; width: 25%; margin: 10px">
                  <img src="http://127.0.0.1:8000{{ $food->image}}" width="268" height="400">
                    <div class="text-center p-4 position-relative mt-n5 mx-4">
                        <h4>{{$food->name}}</h4>
                        <p>{{$food->description}}</p>
                        <p>{{$food->price}}</p>
                        <a href="/foods/{{$food->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('foods.destroy', $food->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <tr><td>
            Not have food
        </td></tr>
    @endif
@endsection