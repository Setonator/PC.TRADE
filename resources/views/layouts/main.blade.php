<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
    <nav class="ui large top fixed hidden menu">
        <div class="ui container">
            @section('nav')
                <a href="" class="item">Home</a>
                <a href="" class="item">For Sale</a>
                <a href="" class="item">Looking For</a>
                <a href="" class="item">Shops</a>
                <a href="" class="item">Login</a>
            @show
        </div>
    </nav>

    <div class="ui container">
        @yield('content')
    </div>

    <div class="footer">

    </div>
</body>
</html>