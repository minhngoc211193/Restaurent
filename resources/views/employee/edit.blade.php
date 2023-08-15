<form action="/employees/{{$employee->id}}" method="post">
    @method('PUT')
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$employee->name}}">
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" value="{{$employee->gender}}">
    <label for="birthday">Birtday</label>
    <input type="text" name="birthday" id="birthday" value="{{$employee->birthday}}">
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$employee->phone}}">
    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{$employee->email}}">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{$employee->address}}">
    <br>
    <input type="submit" value="Update">
</form>