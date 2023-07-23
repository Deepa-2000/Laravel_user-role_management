@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
    <div class="col-md-12">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Profile</h1>
            </div>
            <form class="user" method="POST" action="{{ url('validate_profile/'.Auth::user()->id)}}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span> 
                        @endif

                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" value="{{ Auth::user()->email }}">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="contact" placeholder="Mobile number" value="{{ Auth::user()->contact }}">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                </div>
                <div class="form-group row">
                    <div class="col-sm-12 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password" value="{{ Auth::user()->password }}">
                        @if($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif

                    </div>
                </div>
                <div class="form-group dropdown">
                    <label for="cars">User Type: </label>
                    <select name="usertype" class="btn brn-lg btn-secondary dropdown-toggle" type="button" name="usertype" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option value="">Select</option>
                        <option value="{{ Auth::user()->usertype }}">>Staff</option>
                        <option value="{{ Auth::user()->usertype }}">>Admin</option>
                    </select>
                    @if($errors->has('usertype'))
                        <span class="text-danger">{{ $errors->first('usertype') }}</span>
                    @endif
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit">
                    Update Account
                </button>
            </form>
        </div>
    </div>
</div>


@endsection