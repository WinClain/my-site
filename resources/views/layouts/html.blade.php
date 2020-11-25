<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>
<body class="body d-flex flex-column dark-theme {{$body}}">
    
        <div class="navbar header">
            <h1>Navigation</h1>
            <div class="navbar-buttons ml-auto mr-4 d-flex">
            @yield('navbar-buttons')
            </div>
            <button class=" button-theme" id="theme-button">
                <span class='theme-button-span'></span>
                 Theme
            </button>
        </div>


         @yield('content')


        <div class="footer navbar ">
            <h2>footer</h2>
        </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/app.js"></script>
</body>
</html>