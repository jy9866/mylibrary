<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <!--title-->
    <title>Web Library Management System - @yield('title')</title>
    <link rel="icon" href="/images/library.png" sizes="30x30"/>
    <!-- bootstrap CSS  -->
    @include('includes.stylesheets')
</head>


<body>
    <!--navbar-->

    <br>
    <br>
    <!--content-->
    <div>
     @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!--js/bootstrap-->
    @include('includes.jscripts')

</body>

    <!--Back to top button-->
    <button onclick="topFunction()" id="upBtn" title="Go to top">Top</button>


<footer>
    @include('includes.footer')
    </footer>
</html>
