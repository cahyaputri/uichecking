<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
@include('layouts.scripts')
@yield('addscripts')
</body>
</html>
