<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PC Trade - @yield('title')</title>

    <!-- You MUST include jQuery before Fomantic -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.js"></script>

</head>

<body>
    <nav class="ui large top fixed hidden menu">
        <div class="ui attached stackable menu">
            @section('nav')
                <div class="ui container">
                    <a class="item">
                    <i class="home icon"></i> Home
                    </a>
                    <a class="item">
                    <i class="grid layout icon"></i> Browse
                    </a>
                    <a class="item">
                    <i class="mail icon"></i> Messages
                    </a>
                    <div class="ui simple dropdown item">
                    More
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="edit icon"></i> Edit Profile</a>
                        <a class="item"><i class="globe icon"></i> Choose Language</a>
                        <a class="item"><i class="settings icon"></i> Account Settings</a>
                    </div>
                    </div>
                    <div class="right item">
                    <div class="ui input"><input type="text" placeholder="Search..."></div>
                    </div>
                </div>
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