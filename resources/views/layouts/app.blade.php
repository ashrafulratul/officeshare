<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Office Share') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <script type="text/javascript" src="{{ asset('js/angular/app_config.js') }}"></script>
</head>
<body ng-app="app">

    <div id="app">
        <div class="bodybackground"></div>


        @if (!Auth::guest())
            <a class="btn btn-dark btn-lg toggle" href="#" id="menu-toggle"><i class="fa fa-bars"></i></a>

            <nav id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <a class="btn btn-light btn-lg pull-right toggle" href="#" id="menu-close"><i class="fa fa-times"></i></a>
                    <li class="sidebar-brand">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Office Share') }}
                        </a>
                    </li>
                    <li>
                        <a href="#profile">Profile</a>
                    </li>
                    <li>
                        <a href="#user">User</a>
                    </li>
                    <li>
                        <a href="#managegroup">Manage Group</a>
                    </li>
                    <li>
                        <a href="#groupchat">Group Chat</a>
                    </li>
                    <li>
                        <a href="#individualchat">Individual Chat</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </nav>

        @endif


        @yield('content')



    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    

    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>


</body>
</html>
