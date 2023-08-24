@extends('background.main')
@section ('content')
<form action="/tablereses/{{$tableres->id}}" method="post">
    @method('PUT')
    @csrf

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
               <br>
               <br> 
              <h2 class="text-uppercase text-center mb-5">Edit Table</h2>

              <form>
              <div class="form-outline mb-4">
              <label for="name">View</label>
                  <input type="text" id="view" name="view" value="{{$tableres->view}}" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <label for="name">Manager</label> 
                  <select id="employee_id" name="employee_id" class="form-control form-control-lg">
                    @foreach($employees as $employee)
                    <option value="{{$employee->id}}"
                    @if($employee->id == $tableres->employee_id) selected @endif>
                    {{$employee->name}}</option>
                     @endforeach
                    </select><br>
                </div>
                <div class="form-outline mb-4">
              <label for="customer">Customer</label>
                  <input type="text" id="customer" name="customer" value="{{$tableres->customer}}" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
              <label for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" value="{{$tableres->phone}}"  class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                <p> Menu</p>
                 @foreach($foods as $food)
                 <input type="checkbox" class="form-check-input" name="foods[]" id="foods" value ="{{$food->id}}">
                <label for="food" class="form-check-label" style="margin-right:3%">{{$food->name}}</label><br>
                <label for="price" class="form-check-label" style="margin-right:3%">{{$food->price}}</label><br>
                @endforeach
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
</form
@endsection