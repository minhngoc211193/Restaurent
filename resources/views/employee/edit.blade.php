@extends('background.main')
@section ('content')
<form action="/employees/{{$employee->id}}" method="post">
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
                <br>
              <h2 class="text-uppercase text-center mb-5">Edit Employee</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="name" name="name" value="{{$employee->name}}" class="form-control form-control-lg" />
                </div>
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4">Gender</h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="Male" />
                    <label class="form-check-label" for="gender">Male</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="gender"
                        value="Female" />
                    <label class="form-check-label" for="gender">Female</label>
                    </div>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="birthday" name="birthday" value="{{$employee->birthday}}" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="phone" name="phone" value="{{$employee->phone}}" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="email" name="email" value="{{$employee->email}}" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="address" name="address" value="{{$employee->address}}" class="form-control form-control-lg" />
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