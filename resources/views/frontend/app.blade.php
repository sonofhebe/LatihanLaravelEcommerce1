@section('html_header')
    @include('frontend.items.html_header')
@show
@include('frontend.items.menu')
<body class="home">
    {{-- content wrapper. Contains page content --}}
    <div class="main">
        <div class="main-content">
            @yield('content')
        </div>
    </div>
    @include('frontend.items.footer')
    @section('script')
        @include('frontend.items.script')
    @show
</body>
</html>