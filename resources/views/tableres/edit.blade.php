<form action="/tablereses/{{$tableres->id}}" method="post">
    @method('PUT')
    @csrf
   
    <label for="view">View</label>
    <input type="text" name="view" id="view" value="{{$tableres->view}}">
    
    <br>
    <input type="submit" value="Update">
</form>