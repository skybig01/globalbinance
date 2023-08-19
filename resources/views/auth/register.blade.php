@extends('loginapp')


@section('content')

<div class="main-content" style="background-image:url('{{url('/')}}/asset/frontend/img/bg-2.png');">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5 mt-5">
            <div class="logo">
                <img src="{{ url('/') }}/asset/{{ $logo->image_link }}">
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 ">
            <div class="login-wrap p-0 " style="padding: 20px;">
                <div class="border-0 mb-0 ">
                    <h3 style="color: #ffd740" class="mb-4 text-center">Register</h3>
                    @if($set->registration==1)
                    <form role="form" action="{{route('submitregister')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <i class="fa fa-reguler fa-user left-icon"></i>
                            <input class="form-control " placeholder="Full name" type="text" name="name">
                        </div>
                        @if ($errors->has('name'))
                        <span class="error form-error-msg ">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                        <div class="form-group mb-3">
                            <i class="fa fa-thin fa-user left-icon"></i>
                            <input class="form-control" placeholder="Username" type="text" name="username">
                        </div>
                        @if ($errors->has('username'))
                        <span class="error form-error-msg ">
                            {{ $errors->first('username') }}
                        </span>
                        @endif
                        <div class="form-group">
                            <i class="fa fa-thin fa-envelope left-icon"></i>

                            <input class="form-control" placeholder="Email" type="email" name="email">
                        </div>
                        @if ($errors->has('email'))
                        <span class="error form-error-msg ">
                            {{ $errors->first('email') }}
                        </span>
                        @endif
                        <div class="form-group">
                            <i class="fa fa-thin fa-mobile left-icon"></i>
                            <input class="form-control" placeholder="Mobile" type="text" name="phone">
                        </div>
                        @if ($errors->has('phone'))
                        <span class="error form-error-msg ">
                            {{ $errors->first('phone') }}
                        </span>
                        @endif
                        <div class="form-group">
                            <i class="fa fa-sharp fa-regular fa-light fa-key left-icon"></i>
                            <input class="form-control" placeholder="Password" type="password" name="password">
                        </div>
                        @if ($errors->has('password'))
                        <span class="error form-error-msg ">
                            {{ $errors->first('password') }}
                        </span>
                        @endif
                        <div class="form-group">
                            <i class="fa fa-sharp fa-regular fa-key left-icon"></i>
                            <input class="form-control" placeholder="Re-type password" type="password"
                                name="password_confirmation">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="form-control btn btn-pwa submit px-3">Sign up</button>
                        </div>
                    </form>
                    <br>
                    <div class="d-flex justify-content-center">
                        <div class="p-2 m-0">You have Account! Click</div>
                        <div class="p-2 m-0"><a href="{{route('login')}}" style="color: #ffd740"><b>Log In</b></a></div>
                    </div>
                    @else
                    <div class="text-dark text-center mt-2 mb-3"><strong>We are not currenctly accepting new
                            users</strong>
                    </div>
                    @endif
                </div>

            </div>

            <br>
        </div>
    </div>
</div>
@stop
