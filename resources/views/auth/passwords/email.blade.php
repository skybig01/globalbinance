
@extends('loginapp')

@section('content')
<div class="main-content bg-dark" style="background-image:url('{{url('/')}}/asset/frontend/img/bg-2.png');">
    <!-- Header -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5 mt-5">
                <div class="logo">
                    <img src="{{ url('/') }}/asset/{{ $logo->image_link }}">
                </div>
            </div>
        </div>
    <div class="header py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">{{ __('Reset Password') }}</h1>
              <p class="text-lead text-white">{{$ui['header_body']}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
   <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-white text-center mt-2 mb-3">Recover your account</div>
                    </div>
                    <div class="login-wrap p-0" style="padding: 20px;">
                        <div class="border-0 mb-0">
                            <form role="form" action="{{ route('user.password.email') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <i class="fa fa-thin fa-envelope left-icon"></i>
                                    <input class="form-control text-dark" placeholder="Email" type="email" name="email">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="form-control btn btn-pwa submit px-3">Proceed</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="{{route('login')}}" class="text-white"><small>Sign in</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="{{route('register')}}" class="text-white"><small>Create new account</small></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>


@stop
