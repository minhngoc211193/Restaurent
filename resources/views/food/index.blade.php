@extends('background.main')
@section ('content')
@isset($foods)
<div class="container-fluid product py-5 my-5" style="text-align:center;">
<div style="text-align:left;">
<h2> 
        <a href="/foods/create" class="bi bi-plus-circle" style="width: 45px; height: 43px;"></a>
</h2>
</div>
        <div class=" center-container">
                <h1 class="">Menu</h1>
                <h2 class="display-12"> Chọn món đi</h2>
            </div>
            @foreach($foods as $food)
            <div class="" style="display:inline-block; width: 25%; margin: 10px">
                  <img src="http://127.0.0.1:8000{{ $food->image}}" width="268" height="400">
                    <div class="text-center p-4 position-relative mt-n5 mx-4">
                        <h4><a href="/foods/{{$food->id}}">{{$food->name}}</a></h4>
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