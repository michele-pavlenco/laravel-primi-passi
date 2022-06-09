<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

        </style>
    </head>
    <body>
        <div class="container">
        <h1>Dai un occhiata al nostro <a href="{{route('shop')}}">Shop</a></h1> <br>
        
        </div>
    </body>
</html>
