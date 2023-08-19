@extends('loginapp')

<style>
      input[type=text] {
        width: 100%;
        padding-left: 40px;
    }

    input[type=email] {
        width: 100%;
        padding-left: 50px;
    }

    input[type=password] {
        width: 100%;
        padding-left: 50px;
    }
</style>
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
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0" style="padding: 20px;">
                        <div class="border-0 mb-0" >
                            <h3 style="color: #ffd740" class="mb-4 text-center">Have an account?</h3>
                            
                        <form role="form" action="{{ route('submitlogin') }}" class="signin-form" method="post">
                            @csrf

                            <div class="form-group">
                                <i class="fa fa-envelope left-icon "></i>
                                <input type="text" class="form-control" placeholder="Email" type="email" name="email">

                            </div>
                            @if ($errors->has('email'))
                            <span class="error form-error-msg " style="none">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif

                            <div class="form-group">
                                <i class="fa fa-light fa-key left-icon"></i>
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    name="password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>

                            @if ($errors->has('password'))
                            <span class="error form-error-msg ">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <div class="d-flex justify-content-between ">
                                <div class="p-2 m-0">
                                    <label class="checkbox-wrap checkbox-primary">
                                        Remember Me <input type="checkbox" checked>

                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-pwa submit px-3">Sing In</button>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="p-2 m-0"><a href="{{route('user.password.request')}}"
                                    style="color: #ffd740">Forgot Password</a></div>
                                <div class="p-2 m-0">
                                    <a href="{{route('register')}}" style="color: #ffd740"><b>Sing Up</b></a>
                                </div>
                            </div>
                             </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>

<script>
        function togglePassword() {
                        let passwordInput = document.getElementById('password');


                        if (passwordInput.type === 'password') {
                            passwordInput.type = 'text';

                        } else {
                            passwordInput.type = 'password';

                        }
                    }
    </script>



@stop
