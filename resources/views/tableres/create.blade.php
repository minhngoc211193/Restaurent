@extends('background.main')
@section ('content')
<form action="/tablereses" method="post" >
    @csrf
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
               <br>
               <br>
               <br> 
              <h2 class="text-uppercase text-center mb-5">Book a Table</h2>

              <form>
              <div class="form-outline mb-4">
              <label for="view">View</label>
                  <input type="text" id="view" name="view" placeholder="Place of table" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <label for="name">Manager</label> 
                  <select id="employee_id" name="employee_id" class="form-control form-control-lg">
                    @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                     @endforeach
                    </select><br>
                </div>
                <div class="form-outline mb-4">
              <label for="customer">Customer</label>
                  <input type="text" id="customer" name="customer" placeholder="Name of customer" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
              <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" placeholder="Phone of customer" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <p> Menu</p>
                 @foreach($foods as $food)
                 <input type="checkbox" class="form-check-input" name="foods[]" id="foods" value ="{{$food->id}}">
                  <label for="food" class="form-check-label" style="margin-right:3%">{{$food->name}}</label>
                  <label for="price" class="form-check-label" style="margin:right 0px;">{{$food->price}}</label><br>
                @endforeach
                <!-- <select for="foods" name="foods[]" id="foods" multiple>
                   @foreach($foods as $food)
                    <option value="{{$food->id}}">{{$food->name}}</option>
                   @endforeach
                </select> -->
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