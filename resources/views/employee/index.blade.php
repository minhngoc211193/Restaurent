<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->address}}</td>
            <td>
                <a href="/employees/{{$employee->id}}/edit">Edit</a>
                <form style="display:inline-block" method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
            </td>
        </tr>
    @endforeach
</table>
<p>
        <a href="/employees/create" class="btn btn-success">Add New Employee</a>
      </p>
