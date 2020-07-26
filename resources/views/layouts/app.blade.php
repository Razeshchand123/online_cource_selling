<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

  

      
 
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
   
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet"> -->
    @livewireStyles
    
      <!-- Scripts -->
      @livewireScripts
      <script src="{{ asset('js/app.js') }}" ></script>
      <script src="https://kit.fontawesome.com/a8a1b7735d.js" crossorigin="anonymous"></script>
      <!-- <link href="{{ asset('js/owl.carousel.min.js') }}" rel="stylesheet"> -->
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:#2bff05;">
            <div class="container">
                
                @if(session()->has("homebtn"))
                <!-- <a href="/home" class="">{{session()->get("homebtn")}}</a> -->
                <a class="navbar-brand " href="{{ url('/home') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    Buddha Digital
                 </a>
                 


                @else
                <a class="navbar-brand " href="{{ url('/') }}">
                Buddha Digital
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
              @endif




              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <!-- ++++++++++++++++ frontend menu buttoon haru+++++++++ -->
                       <li class="nav-item"> <a href="/homelive" class=" nav-link">home</a></li>
                     <li class="nav-item"> <a href="/one" class=" nav-link">About_Us</a></li>
                      <li class="nav-item"><a href="" class=" nav-link">Blog</a></li>
                        
                     <!-- ++++++++++++++++menu buttoon haru+++++++++ -->

                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                               
                            @endif
                        @else

<!-- ++++++++++++++++ backend menu buttoon haru+++++++++ -->
                        @if(session()->has("homebtn"))
                        <li class="nav-item pt-2"> <a href="/one" class=" nav-link">About_Us</a></li>
                        <li class="nav-item pt-2"> <a href="/homelive" class=" nav-link">Blog</i></a></li>
                        <li class="nav-item"> <a href="/dashbord" class=" nav-link"><i class="fas fa-cogs text-danger fa-2x  pt-2"></i></li>
                        
                           @endif
                        
<!-- ++++++++++++++++ bCKEND menu buttoon haru+++++++++ -->

                                                       
                             


                            <li class="nav-item dropdown" >
                                <a style="margin-top:-7px;" id="navbarDropdown" class="text-uppercase   nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                            <img src=" storage/{{Auth::user()->profile}}" alt="" height="40" width="40" 
                              class="img-responsive rounded-circle mt-2">
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
   <div style="margin-top:-4%;" id="savouter"class="savouter"> 
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2bff05"
     fill-opacity="1" d="M0,256L60,218.7C120,181,240,107,360,101.3C480,96,600,160,720,160C840,160,960,96,1080,90.7C1200,85,1320,139,1380,165.3L1440,192L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>

   </div>


  
   
        <main class="py-4" style="margin-top:-5%;">
        
            @yield('content')
        </main>
    </div>












    
    <div class="text-center svg-top">
<livewire:footer/>
</div>


<style>
    .svg-top{margin-top:-8%; }
</style>
</body>
</html>
