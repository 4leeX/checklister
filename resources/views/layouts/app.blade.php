<!doctype html>
<html lang="en">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
    
 <!-- CoreUI CSS -->
 <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.min.css" integrity="sha512-n+g8P11K/4RFlXnx2/RW1EZK25iYgolW6Qn7I0F96KxJibwATH3OoVCQPh/hzlc4dWAwplglKX8IVNVMWUUdsw==" crossorigin="anonymous" />
 <title>{{ config('app.name', 'Laravel') }}</title>
@livewireStyles

 </head>
 <body class="c-app">

        @include('partials.sidebar')

        <div class="c-wrapper">
            <header class="c-header c-header-light c-header-fixed">
                <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                    <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button>
            <ul class="c-header-nav mfs-auto">
            </ul>
            <ul class="c-header-nav">
            
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Upgrade NPM &amp; Bower<span class="float-right"><strong>0%</strong></span></div><span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span></div><span class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div><span class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span></div><span class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item d-block" href="#">
            <div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span></div><span class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </span>
            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
            </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                <a class="c-header-nav-link" href="{{ route('consultation') }}" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ __('Get Consultation')}}
                </a>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                <a class="c-header-nav-link" href="{{ route('welcome') }}" role="button" aria-haspopup="true" aria-expanded="false">
                <svg class="c-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
                </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
            <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 mfe-3 float-left">
            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
            </div>
            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just now</small></div>
            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important message</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 mfe-3 float-left">
            <div class="c-avatar">
                <img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com">
                <span class="c-avatar-status bg-warning"></span>
            </div>
            </div>
            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5 minutes ago</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 mfe-3 float-left">
            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
            </div>
            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52 PM</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item" href="#">
            <div class="message">
            <div class="py-3 mfe-3 float-left">
            <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-info"></span></div>
            </div>
            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03 PM</small></div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
            </div>
            </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
            </div>
            </li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                </svg>
            </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                    <svg class="c-icon mfe-2">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                    </svg> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
            
            </button>
            </ul>
            
            </header>
            <div class="c-body">
            <main class="c-main">
                @yield('content')

            </main>
            </div>


        



        
        
        
     

 <!-- Optional JavaScript -->
 <!-- Popper.js first, then CoreUI JS -->
 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous"></script> --}}
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> <script src="https://unpkg.com/@popperjs/core@2"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js" integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA==" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>
 <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
 @livewireScripts
 <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
@yield('scripts')

</body>
</html>

{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
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
</body>
</html> --}}
