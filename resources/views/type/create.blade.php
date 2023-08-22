@extends('background.main')
@section ('content')
<form action="/types" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mask d-flex align-items-center h-100 gradient-custom-3" >
    <div class="container h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5"> 
                <br>
                <br>
                <br>
              <h2 class="text-uppercase text-center mb-5">ADD NEW TYPES</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" placeholder="Type of foods" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="description" name="description" placeholder="Description" class="form-control form-control-lg" />

                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" value="Create"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Create</button>
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