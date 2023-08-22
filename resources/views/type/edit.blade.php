@extends('background.main')
@section ('content')
<form action="/types/{{$type->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5"> 
                <br>
                <br>
              <h2 class="text-uppercase text-center mb-5">Edit Type</h2>

              <form>

                <div class="form-outline mb-4">
                <label for="name">Name</label>
                  <input type="text" id="name" name="name" value="{{$type->name}}" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" value="{{$type->image}}">
                </div>

                <div class="form-outline mb-4">
                <label for="description">Description</label>
                  <input type="text" id="description" name="description" value="{{$type->description}}" class="form-control form-control-lg" />

                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" value="Update"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Update</button>
                </div>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection