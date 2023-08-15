<form action="/employees" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br>
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender"><br>
    <label for="birthday">Birtday</label>
    <input type="text" name="birthday" id="birthday"><br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone" ><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email"><br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address" >
    <br>
    <br>
    <input type="submit" value="Create">
</form>