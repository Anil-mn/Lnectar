<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('andro.head')
        <body>
            @include('andro.header')
            @yield('trial')
            @include('andro.footer')
        </body>
        
    </html>