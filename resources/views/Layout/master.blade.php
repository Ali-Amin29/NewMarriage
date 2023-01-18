{{--  including Header without Links  --}}
@include('Include.header')
{{--  include Evervy Style for Pages   --}}
{{--  Login --}}
@yield('style')

@livewireStyles
</head>

<body data-bs-spy="scroll" data-bs-target="#navigation" data-bs-offset="0" tabindex="0">
    {{--  include navBar  --}}
    @include('Include.navbar')
    {{--  including Pages   --}}
    @yield('container')

    {{--  including footer   --}}
    @include('Include.footer')
    {{--  including Scripts for pages   --}}
    @yield('script')

    @livewireScripts
    <script type="text/javascript" ></script>
</body>

</html>
