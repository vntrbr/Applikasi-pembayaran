@include('layouts.sidebar')
@include('layouts.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@include('layouts.footer')