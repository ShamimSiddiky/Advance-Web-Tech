<head>
@extends('inc.app')
@section('content')
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-7">
                    <div id="login-box" class="col-md-11">
                        <form id="login-form" class="form" action="{{route('loginPost')}}" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Username:</label>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label>
                                <input type="text" name="password" id="password" class="form-control">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection