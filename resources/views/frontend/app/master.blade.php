<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {!! SEO::generate() !!}
    @include('frontend.app.css')
    @yield('customCSS')
</head>

<body class="home">
    <div class="page-wrapper">
        <main class="main">
            @include('frontend.app.header')

            @yield('content')

            @include('frontend.app.footer')

            @include('frontend.app.js')
            @yield('customJS')
        </main>
    </div>


</body>
</html>
