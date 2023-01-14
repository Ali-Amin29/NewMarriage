{{--  including Header without Links  --}}
@include('Include.header')

@yield('style')
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('Include.navbardashboard')
        @include('Include.headerdashboard')
        @include('Include.sidebardashboard')
        @yield('container')
    </div>

    @yield('script')
</body>

</html>
