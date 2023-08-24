@extends('background.main')
@section('content')
<body class="w3-content" >

  <div>
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6" >
			      <img style="width:500px; height:600px" class="imgdetail" src="{{$food->image}}" alt="">
          </div>
          <div class="detail col-md-6">
                    <br>
                    <br>
                    <br>
			      <h1 class="namedetail" style="margin-top: 20%;text-align: center;">{{$food->name}}</h1>
			      <p style="text-align: center;">{{$food->description}}</p>
          </div>
        </div>
    </div>
		

</body>
@endsection
