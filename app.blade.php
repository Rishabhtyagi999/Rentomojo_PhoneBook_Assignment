<!DOCTYPE html>
<html>
    <head>
        <title>Phonebook Application</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- BOOTSTRAP -->
        <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/dt-1.10.8/datatables.min.css"/>
 
    </head>
    <body>
        <div class="container">
         @if(Auth::check())
        <div class="row">
            Welcome {{ ucfirst(Auth::user()->name) }} [ <a href="{{ url('/') }}">Home</a>&nbsp;|&nbsp;<a href="{{ url('/auth/logout') }}">Logout</a> ]
        </div>
        @endif
            <div class="content">
                <div class="title">
                    @yield('content')
                </div>
            </div>
        </div>
        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/vendor/bootstrap.js') }}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/r/bs/dt-1.10.8/datatables.min.js"></script>
      
        @yield('inline_js')
    </body>
</html>
