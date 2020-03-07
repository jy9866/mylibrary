<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <!--title-->
    <title>Web Library Management System - @yield('title')</title>
    <link rel="icon" href="/images/icon.png" sizes="30x30"/>
    <!-- bootstrap CSS  -->
    @include('includes.stylesheets')
    @include('includes.headnavbar')
    <img src="/images/banner.png" alt = "Banner" height ="350" width="100%">
</head>


<body>
    <!--navbar-->
    @include('includes.navbar')
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
