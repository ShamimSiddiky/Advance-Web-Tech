@extends('inc.app')
@section('content')

    @if(Session::get('user'))
    @endif
    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <tr>
            <td>{{$manager->name}}</td>
            <td>{{$manager->m_id}}</td>
            <td>{{$manager->email}}</td>
            <td>{{$manager->phone}}</td>
        </tr>

</table>
@endsection
