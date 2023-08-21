<form action="/register" method="post">
    @csrf
    <input type="text" name="name" placeholder="Username">
    <input type="text" name="email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="typeofuser" placeholder="type of user">
    <input type="submit" value="Register">
</form>