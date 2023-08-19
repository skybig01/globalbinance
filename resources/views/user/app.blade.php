<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <base href="{{url('/')}}" />
    <title>{{ $title }} | {{$set->site_name}}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}" />
    <meta name="application-name" content="{{$set->site_name}}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="description" content="{{$set->site_desc}}" />
    <link rel="shortcut icon" href="{{url('/')}}/asset/{{ $logo->image_link2}}" />
    <link rel="apple-touch-icon" href="{{url('/')}}/asset/{{ $logo->image_link2}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
    {{-- <link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css"> --}}

    <meta name="theme-color" content="rgb(248, 209, 47)">

    <link rel="manifest" href="/__manifest.json">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="{{url('/') }}/asset/pwa/css/style.css" rel="stylesheet">

    @yield('css')
</head>


<body>
    <div id="app " style="background-image:url('{{url('/')}}/asset/frontend/img/bg-2.png');">
        <!-- loader -->
        <div id="loader">
            <img src="{{url('/') }}/asset/pwa/img/loading-icon.png" alt="icon" class="loading-icon">
        </div>
        <!-- * loader -->

        <!-- App Header -->
        <div class="section full mt-2 ">
            <!-- carousel full -->
            <div class="carousel-full splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <div class="card rounded-0">
                                <div class="card-body" style="margin-top: 40px">

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
              {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500"
              },
              {
                "proName": "FOREXCOM:NSXUSD",
                "title": "US 100"
              },
              {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR to USD"
              },
              {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
              },
              {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
              },
              {
                "description": "FXCM",
                "proName": "FX:USDCHF"
              }
            ],
            "showSymbolLogo": true,
            "colorTheme": "dark",
            "isTransparent": true,
            "displayMode": "compact",
            "locale": "en"
          }
            </script>
          </div>
          <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </li>





                    </ul>
                </div>
            </div>
            <!-- * carousel full -->
        </div>
         <!-- TradingView Widget BEGIN -->
        <div class="appHeader  text-light" style="background-color: rgb(248, 209, 47);">
            <div class="left">
                <a href="{{url('/')}}"><ion-icon name="home-outline" style="color: #ffff;"></ion-icon></a>
                <div class="pageTitle">
                    <a href="{{url('/')}}"><img src="{{ url('asset/pwa/img/logo.png') }}" alt="logo" class="logo">
                    </a>
                </div>
            </div>

            <div class="right dropdown" style="background-color:transparent;">

                <strong>
                    BTC{{substr($user->balance,0,9)}}
                </strong>
                @auth
                <div class="dropdown" >
                    <a href="#" class="headerButton" data-bs-toggle="dropdown">
                        <img src="{{url('/')}}/asset/profile/{{$cast}}" alt="image" class="imaged w32">
                    </a>
                    <!-- add .dropdown-menu-end -->
                    <div class="dropdown-menu" style="background-image:url('{{url('/')}}/asset/frontend/img/bg-2.png');">
                        <!-- profile box -->
                        <div class="profileBox pt-2 pb-2" >
                            <div class="image-wrapper">
                                <img src="{{url('/')}}/asset/profile/{{$cast}}" alt="image" width="70px" class="imaged">
                            </div>
                            <div class="in">
                                <strong>{{$user->name}}</strong>

                            </div>

                        </div>
                        <!-- * profile box -->
                        <hr>
                        <a class="dropdown-item" href="#">ID : {{$user->username}}</a>
                        <a class="dropdown-item" href="{{url('/')}}">
                            <ion-icon name="home-outline"></ion-icon>Dashboard
                        </a>


                        <a class="dropdown-item" href="{{route('user.appwallet')}}">
                            <ion-icon name="wallet-outline"></ion-icon>Balance
                        </a>
                        <a class="dropdown-item" href="{{route('user.appkyc')}}">
                            <ion-icon name="shield-half-outline"></ion-icon>KYC
                        </a>

                        <a class="dropdown-item" href="{{route('user.appprofile')}}">
                            <ion-icon name="person-outline"></ion-icon>Profile
                        </a>
                        <a class="dropdown-item" href="{{route('user.appsupport')}}">
                            <ion-icon name="chatbubble-outline"></ion-icon>Support
                        </a>

                        <a class="dropdown-item" href="{{route('user.logout')}}">
                            <ion-icon name="log-out-outline"></ion-icon>Logout

                        </a>


                    </div>
                </div>

                @endauth

            </div>
        </div>
        <!-- * App Header -->

    </div>





        @yield('content')


    </div>
    <script>
        if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/__service-worker.js').then(function(registration) {
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            console.log('ServiceWorker registration failed: ', err);
        });
    });
}
    </script>
    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="{{ url('/') }}/asset/pwa/js/lib/bootstrap.bundle.min.js"></script>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->

    <script src="{{ url('/') }}/asset/pwa/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->

    <script src="{{ url('/') }}/asset/pwa/js/base.js"></script>
    <!-- ========= JS Files =========  -->

    <script>
        // Add to Home with 2 seconds delay.
            AddtoHome("2000", "once");
    </script>
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
<script type="text/javascript">
    $(window).on('load', function () {
    $('#modal-notification').modal('show');
  });
</script>
