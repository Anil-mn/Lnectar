<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('incu.head')
        <body>
            @include('incu.header2')
            @yield('content')
            @include('incu.footer')
        </body>
        <script src="{{ asset('js/app.js') }}"></script>
    </html>