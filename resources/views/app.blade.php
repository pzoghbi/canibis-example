<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        @yield('nav')
        <div class="page-out">
            <div class="page-in">
            @yield('content')
            </div>
        </div>
        @include('layouts.scripts')
    </body>
</html>