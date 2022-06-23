<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'ALL INDIA') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="app">
                    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="float:right;">
                        <div class="container">
                            <!-- <a class="navbar-brand" href="#">
                           OBC ALL INDIA
                            </a> -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav mr-auto"></ul>


                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    <!-- @guest -->
                                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    <!-- @else -->
                                        <!-- <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                                        <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                                        <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li> -->
                                        <!-- <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>


                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>


                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li> -->
                                    <!-- @endguest -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <main class="py-4">
                        <div class="container">
                            <div class="app-content">
                                 @yield('content')
                            </div>     
                        </div>
                    </main>
                 </div>
            </div>
        </div>
    </div>
</body>
</html>