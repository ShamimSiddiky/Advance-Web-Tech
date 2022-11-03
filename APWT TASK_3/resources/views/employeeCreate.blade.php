@extends('inc.app')
@section('content')
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">New Employee</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-7">
                    <div id="login-box" class="col-md-11">
                        <form id="login-form" class="form" action="{{route('employeeCreate')}}" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Register New Employee</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="id" class="text-info">ID:</label>
                                <input type="text" name="id" id="id" class="form-control">
                                @error('id')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">email:</label>
                                <input type="text" name="email" id="email" class="form-control">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="phone" class="text-info">Phone:</label>
                                <input type="text" name="phone" id="phone" class="form-control">
                            @error('phone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="managedBy" class="text-info">Managed By:</label>
                                <input type="text" name="managedBy" id="managedBy" class="form-control">
                            @error('managedBy')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
