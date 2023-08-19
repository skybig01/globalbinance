<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="{{url('/')}}"/>
        <title>{{ $title }} | {{$set->site_name}}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="description" content="{{$set->site_desc}}" />
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{ $logo->image_link }}" />
        <link rel="apple-touch-icon" href="{{url('/')}}/asset/{{ $logo->image_link }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/asset/{{ $logo->image_link }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/asset/{{ $logo->image_link }}" />
        <link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css">

        <link rel="stylesheet" href="{{url('/')}}/asset/frontend/css/sweetalert.css" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"  href="{{url('/')}}/asset/login/css/style.css">

         @yield('css')
         <style>
            @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap");

            /* body {
               max-height: 100vh;
                background-image: url('{{ url('/') }}/asset/frontend/img/bg-lg.png');


            } */
            html {
                height: 100%;
                margin: 0;
                font-family: "Poppins", sans-serif;
                font-size: 15px;
                line-height: 1.6rem;
                letter-spacing: 0.004em;
                /* background: #EDEDF5;  */
                background: #ffecb3;

                overflow-x: hidden;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }


            .bg-primary {
                background: #fbc02d !important;
            }

            .bg {
                /* The image used */


                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .logo {
                width: 80px;
                margin: auto;
            }

            .logo img {
                width: 100%;
                height: 80px;
                object-fit: cover;
                border-radius: 50%;
                box-shadow: 0px 0px 3px #fbc02d,
                    0px 0px 0px 5px #fff9c4,
                    8px 8px 15px #a7aaa7,
                    -8px -8px 15px #fffde7;
            }

            .btn-pwa {
                background: #ffc400 !important;
                border-color: #ffc400 !important;
                color: #FFFFFF !important;
                font-weight: 800;
                font-size: 16px;
            }

            .btn-pwa:hover,
            .btn-pwa:focus,
            .btn-pwa:active,
            .btn-pwa.active {
                background: #ffd740 !important;
                border-color: #ffd740 !important;
            }

            .btn-pwa.disabled,
            .btn-pwa:disabled {
                background: #ffd740;
                border-color: #6236FF;
                opacity: 0.5;
            }

            /* Style the checkmark/indicator */
            .checkbox-primary {
                color: #ffd740;
            }

            .checkbox-primary input:checked~.checkmark:after {
                color: #ffd740;
            }

            .form-control:hover,
            .form-control:focus {
                background: transparent;
                outline: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                border-color: rgba(255, 215, 64, 0.4);
            }

            .form-control:focus {
                border-color: rgba(255, 255, 255, 0.4);
            }

            /* visited link */

            a:link {
                color: #fff9c4;
                font-size: 16px;
                font-weight: 500;
            }

            a:visited {
                color: #fff9c4;
                font-size: 16px;
                font-weight: 500;
            }

            /* mouse over link */
            a:hover {
                color: rgba(255, 255, 255, 0.4) !important;
            }

            /* selected link */
            .ftco {
                background-image: url('{{ url('/') }}/asset/frontend/img/bg-2.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4);
                /* Black w/opacity/see-through */
            }
            .error,
             .form-error-msg {
                color: #ff0000;
                font-size: 12px;
                font-weight: 500;
             }
             /*end */
             .main-content {
        min-height: 100%;
        position: relative;
    }
             #footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
.icon {
  position: absolute;
  margin: 15px;
  color: #ffd740;
}

.form-control {

}
.input-field {
    position: relative;
    text-align: center;
}
input[type=email] {
        width: 100%;
        padding-left: 40px;
    }

    input[type=password] {
        width: 100%;
        padding-left: 40px;
    }
    input[type=text] {
        width: 100%;
        padding-left: 40px;
    }
        .form-group {
        position: relative;
    }

    .field-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, .9);
    }

    .icon {
        position: absolute;
        margin: 25px;

        transform: translateY(-50%);
        color: rgba(255, 255, 255, .9);
    }

    .right-icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        color: rgba(255, 255, 255, .9);
    }

    .left-icon {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        color: #ffd740;
    }

    .form-control {
        padding-left: 40px;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        padding: 20px;
        outline: none;
    }


  
        </style>
    </head>
<!-- header begin-->
<body class="bg-dark"
style="background-image:url('{{url('/')}}/asset/frontend/img/bg-lg.png');
background-repeat: no-repeat;
background-size: cover;
">


@yield('content')




<footer>

    <div class="copyright text-center text-xl-center text-muted">
        <a href="{{url('/')}}" class="font-weight-bold ml-1 "><span class="">{{$set->site_name}}</span></a> &copy;
        {{date('Y')}}. All Rights Reserved.
    </div>
    <br>
</div>
</footer>

<script src="{{url('/')}}/asset/login/js/jquery.min.js"></script>
<script src="{{url('/')}}/asset/login/js/popper.js"></script>
<script src="{{url('/')}}/asset/login/js/bootstrap.min.js"></script>
<script src="{{url('/')}}/asset/login/js/main.js"></script>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{url('/')}}/asset/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="{{url('/')}}/asset/dashboard/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{url('/')}}/asset/dashboard/js/demo.min.js"></script>
  <script src="{{url('/')}}/asset/frontend/js/sweetalert.js"></script>

</body>

</html>
@include('sweetalert::alert')
@yield('script')
@if (session('success'))
    <script>
      "use strict";
        $(document).ready(function () {
            swal("Success!", "{{ session('success') }}", "success");
        });
    </script>
@endif

@if (session('alert'))
    <script>
      "use strict";
        $(document).ready(function () {
            swal("Sorry!", "{{ session('alert') }}", "error");
        });
    </script>
@endif
    <script>
    @if(Session::has('message'))
    "use strict";
    var type = "{{Session::get('alert-type','info')}}";
    switch (type) {
        case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
        case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
        case 'success':
            toastr.success("{{Session::get('message')}}");
            break;
        case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
    }
    @endif
</script>
