<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="@yield('description')" />

    <title>HDT - @yield('title')</title>

    <link rel="icon" href="/images/favicon.png" />

    <!--link rel="stylesheet" href="/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css"-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/line-awesome@1.3.0/dist/line-awesome/css/line-awesome.min.css" />

    <link rel="stylesheet" href="/libs/css/bootstrap-extended.css" />
    <link rel="stylesheet" href="/libs/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/libs/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/libs/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/libs/css/aos.css" />

    <link rel="stylesheet" href="/css/style.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=block" />

    <style>
        html {
            font-size: 15px;
        }

        body {
            font-family: Roboto, sans-serif;
        }
    </style>
</head>

<body data-spy="scroll"
    data-target=".site-navbar-target"
    data-offset="300"
    class="custom-scrollbar overflow-x-hidden">
    <div class="site-wrap">
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </div>
    
    <script src="/libs/js/jquery-3.3.1.min.js"></script>
    <script src="/libs/js/popper.min.js"></script>
    <script src="/libs/js/bootstrap.min.js"></script>
    <script src="/libs/js/owl.carousel.min.js"></script>
    <!--script src="/libs/js/jquery.easing.1.3.js"></script-->
    <script src="/libs/js/aos.js"></script>
    <script src="/libs/js/jquery.fancybox.min.js"></script>

    <script src="/js/main.js"></script>
</body>
</html>
