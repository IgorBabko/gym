<!DOCTYPE html>
<html>
    <head>
        <title>Gym</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.css">
        <link rel="stylesheet" href="/css/jquery.bxslider.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="shortcut icon" href="../img/icon_gym.gif" type="image/gif">
        @if ( Config::get('app.debug') )
        <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
        </script>
        @endif
    </head>
    <body>
        @include ('partials.notifications')
        @include('partials.login')
        @include('partials.register')
        @include('partials.nav')
        @yield('content')
        @include('partials.footer')
        <script src="/js/jquery.min.js"></script>
        <script src="/js/ohsnap.js"></script>
        <script src="/js/jquery.bxslider.min.js"></script>
        <script src="/js/scrollmagic.min.js"></script>
        <script src="/js/parallax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
