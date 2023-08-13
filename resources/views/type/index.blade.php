<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($types as $type)
        <tr>
            <td>{{ $type->id }}</td>
            <td> <a href="{{ route('types.show', $type->id) }}">{{$type->name}}</a></td>
            <td>
                <a href="/types/{{$type->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('types.destroy', $type->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<p>
        <a href="/types/create" class="btn btn-success">Add New Type</a>
      </p>
