@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="post" action="{{ route('sample.validate_register') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="name" placeholder="Name">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span> 
                        @endif

                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="contact" placeholder="Mobile number">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                    </div>
                </div>
                <div class="form-group dropdown">
                    <label for="cars">User Type: </label>
                    <select name="usertype" class="btn brn-lg btn-secondary dropdown-toggle" type="button" name="usertype" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option value="">Select</option>
                        <option value="0">Staff</option>
                        <option value="1">Admin</option>
                    </select>
                    @if($errors->has('usertype'))
                        <span class="text-danger">{{ $errors->first('usertype') }}</span>
                    @endif
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Register Account
                </button>
                <hr>
                <a href="{{ ('/') }}" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="{{ ('/') }}" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ ('/forgot') }}">Forgot Password?</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ ('/login') }}">Already have an account? Login!</a>
            </div>
        </div>
    </div>
</div>
@endsection