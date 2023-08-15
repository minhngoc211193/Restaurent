<form action="/tablereses/{{$tableres->id}}" method="post">
    @method('PUT')
    @csrf
   
    <label for="view">View</label>
    <input type="text" name="view" id="view" value="{{$tableres->view}}">
    <label for="name">Manager</label>
    <select name="employee_id" id="employee_id">
        @foreach($employees as $employee)
            <option value="{{$employee->id}}" 
            @if($employee->id == $tableres->employee_id) selected @endif>
            {{$employee->name}}</option>
        @endforeach
    </select><br>
    
    <br>
    <input type="submit" value="Update">
</form>