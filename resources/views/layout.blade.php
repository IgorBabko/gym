<!DOCTYPE html>
<html>
    <head>
        <title>Gym</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/app.css">
        @if ( Config::get('app.debug') )
        <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </head>
    <body>
        @include('partials.login')
        @include('partials.register')
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')


        @if (session('notify'))
            <div id="ohsnap" data-notify="{{ session('notify') }}"></div>
        @else
            <div id="ohsnap"></div>
        @endif

        <script src="/js/jquery.min.js"></script>
        <script src="/js/ohsnap.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
