<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="{{ asset('js/variable.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!--   semantic ui    -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}" defer></script>

    <!--    alpinejs    -->
    <script src="{{ asset('js/alpine.js') }}" defer></script>


</head>
<body>
    <div class="his-container-spinner scroll-none-width" id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @php
                        if (isset($data) && isset(json_decode($data)->results))
                            {
                                $value = $data;
                            }
                        @endphp

                        @guest
                            @if (!isset($value))
                            <li class="nav-item" id="li_login">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item" id="li_register">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>

                            @elseif (isset($value))
                            <li class="nav-item dropdown">
                                <a id="display_name_user" id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

{{--                                    @if( $value->avatar_upload == null || $value->avatar_upload  == "")--}}
{{--                                        <img class="rounded-circle" src="{{Auth::user()->avatar}}" style="max-width: 40px; max-height: 40px"/>--}}
{{--                                    @else--}}
{{--                                        <img class="rounded-circle" src="{{Auth::user()->avatar_upload}}"  style="max-width: 40px; max-height: 40px"/>--}}
{{--                                    @endif--}}


                                    {{ json_decode($data)->results->name }}

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user') }}">
                                        Thông tin
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                @endif
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="his-spinner all-center" id="spinner_container_page">
        <div class="his-content-spinner all-center">
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="m-2" id="spinner_container_page_lable">Loading...</span>
        </div>
    </div>
</body>
<footer id="footer" class="d-flex justify-content-center align-items-center text-center">
        Copyright All Rights Reserved @2022 By Leopard Solutions
</footer>
<script type="text/javascript">

    function LoadPage(){
        HisSpinner(false);
    }

    function GetDataImage(){
        axios.get('/api/user/image')
            .then(function (response) {
                // handle success
                var payload = CheckArrayOrObjectBindData(response.data);
                console.log(payload);
                HisSpinner(false);
                var src = document.getElementById("bind_avatar");
                src.setAttribute("src", payload.avatar_upload);
            })
            .catch(function (error) {
                // handle error
                console.log(error);
                HisSpinner(false);
            })
            .then(function () {
                // always executed
            });
    }
</script>
</html>

