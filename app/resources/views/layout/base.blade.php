<html>
<head>
    <!-- viewport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Timer - @yield('title')</title>
    <link href="{{asset('css/common/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/common/bootstrap-grid.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/common/bootstrap-reboot.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <link href="{{asset('css/common/common.css')}}?v=1" rel="stylesheet">
    <link href="{{asset('css/common/jquery-ui.css')}}">
    <link href="{{asset('css/common/jquery-ui.structure/css')}}">
    <link href="{{asset('css/common/jquery-ui.theme.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @stack('css')
</head>
<body>
@section('sidebar')
@show
<div class="drawer drawer--left">
    <header role="banner">
{{--        <button type="button" class="drawer-toggle drawer-hamburger">--}}
{{--            <span class="sr-only">toggle navigation</span>--}}
{{--            <span class="drawer-hamburger-icon"></span>--}}
{{--        </button>--}}
        <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
                <li><a class="drawer-brand" href="#">Brand</a></li>
                <li><a class="drawer-menu-item" href="#">Nav1</a></li>
                <li><a class="drawer-menu-item" href="#">Nav2</a></li>
            </ul>
        </nav>
    </header>
</div>
<div class="container">
    @yield('content')
</div>
<script src="{{asset('js/common/jquery-3.4.js')}}"></script>
<script src="{{asset('js/common/jquery-ui.js')}}"></script>
<script src="{{asset('js/common/bootstrap.js')}}"></script>
<script src="{{asset('js/common/bootstrap.bundle.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="{{asset('js/common/jquery.ui.touch-punch.js')}}"></script>
<script src="{{asset('js/common/onload.js')}}"></script>
@stack('js')
</body>
</html>