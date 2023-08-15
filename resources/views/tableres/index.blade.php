<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>View</th>
        <th>Manager</th>
        <th>Action</th>
    </tr>
    @foreach($tablereses as $tableres)
        <tr>
            <td>{{ $tableres->id }}</td>
            <td>{{ $tableres->view }}</td>
            <td>{{$tableres->employee->name}}</td>
            <td>
                <a href="/tablereses/{{$tableres->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('tablereses.destroy', $tableres->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach
</table>
