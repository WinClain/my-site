<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>
<body @yield('boddy-class')>
    
        <div class="navbar">
            <h1>Navigation</h1>
        </div>


         @yield('content')


        <div class="footer navbar">
            <h4>footer</h4>
        </div>

    <script src="js/app.js"></script>
</body>
</html>