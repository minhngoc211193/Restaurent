<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Type</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($foods as $food)
        <tr>
            <td>{{ $food->id }}</td>
            <td>{{ $food->type->name }}</td>
            <td>{{ $food->name }}</td>
            <td>{{ $food->description }}</td>
            <td>{{ $food->price }}</td>
            <td>
                <a href="/foods/{{$food->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('foods.destroy', $food->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach
</table>
