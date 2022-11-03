@extends('inc.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Email</th>
        <th>Managed By</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($employees as $employee)
    <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->id}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->managedBy}}</td>
        <td>
            <a href="/employeeEdit/{{$employee->id}}">
                <div class="form-group">
                    <input type="submit" name="edit" class="btn btn-info btn-md" value="Edit">
                </div>
            </a>

        </td>
        {{-- <td><a href="/employeeEdit/{{$employee->id}}">Edit</a></td> --}}
        <td><a href="/employeeDelete/{{$employee->id}}">
            <div class="form-group">
                <input type="submit" name="delete" class="btn btn-info btn-md" value="Delete">
            </div>
        </a></td>
    </tr>
    @endforeach

</table>
@endsection
