<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <style>
        Body
        {
        color: white;
        }
    
.navbar.navbar-expand-md.navbar-light.navbar-laravel {
    box-shadow: 0px 7px 8px rgb(30,5,0);;
    }
        
    #lowerpage {
        height: 1500px;
        background-color: rgb(50,20,15);
        color: white;
        }
        
    .sidemenu {
        background-color: rgb(65,30,25);
        border-right: solid;
        border-color: rgb(30,5,0);
        border-width: 10px;
        height: 100%;
        font-size: 16pt;    
        padding-top: 15px;
    }
        
    .maincontent{
        padding-top: 15px;    
    }
        
    #lowerpage a:link {color:white; text-decoration: none;}
    #lowerpage a:visited {color:white; text-decoration: none;}
  
    </style>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="header">
            
        </div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="/">Jaunumi</a></li>
                        <li><a href="/leagues">Līgas</a></li>
                        <li><a href="/forum">Forums</a></li>
                        <li><a href="/paddock">Paddoks</a></li>
                        <li><a href="/guide">Ceļvedis</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
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
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div id="lowerpage" class="row">
        <div id="sidemenu" class="col-sm-2 sidemenu">sidemenu
        </div>
        <div id="maincontent" class="col-sm-10 maincontent">maincontent
        <main class="py-4">
            @yield('content')
        </main>
            </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
