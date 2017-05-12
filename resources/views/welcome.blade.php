<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div id="app" class="container">
                <alert>
                    <strong>General!</strong> updated.
                </alert>
                <alert type="error">
                    <strong>Error!</strong> updated.
                </alert>
                <alert type="Success">
                    <strong>Success!</strong> updated.
                </alert>
            </div>


        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
