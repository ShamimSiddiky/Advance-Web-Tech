@extends('inc.app')
@section('content')

<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    @foreach($managers as $manager)
        <tr>
        <td><a href="/manager/{{$manager->id}}">{{$manager->name}}</a></td>
            <td>{{$manager->phone}}</td>
            <td>{{$manager->email}}</td>
        </tr>
    @endforeach
</table>


@endsection