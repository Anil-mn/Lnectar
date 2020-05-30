<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('incu.head')
        <body>
            @include('incu.header')
            @yield('content')
            @include('incu.footer')
        </body>
        <script src="{{ asset('js/app.js') }}"></script>
    </html>