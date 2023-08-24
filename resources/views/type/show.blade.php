@extends('background.main')
@section ('content')
<br>
<br>
<br>
<div class="carousel-item active">
                    <img class="" style="width:1356px; height:600px" src="{{$type->image}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div>
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn"><strong class="text-dark">{{$type->name}}</strong></p>
                                </div>
                                <div class="container mt-3 margin-top:3%">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                    </tr>
                                    @foreach($type->foods as $food)
                                        <tr>
                                            <td>{{$food->id}}</td>
                                            <td>{{$food->name}}</td>
                                            <td>{{$food->description}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection