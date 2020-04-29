<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Bootstrap effect progress-bar -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Font family Open Sans - Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

        <!-- Definition title page (title TAB navigator) -->
        <title>@yield('pageTitle')</title>

        <!-- Definition style -->
        {{-- Prefiero usar los “helpers” de laravel ya que acostumo a usar los de symfony. --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>

    <body>
        <!-- Eliminacion de margin y el padding con m-0 y p-0 --> 
        <div class="container-fluid m-0 p-0">
            @yield('header')
        </div>

        <div>
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- Eliminacion de margin y el padding con m-0 y p-0 --> 
        <div class="container-fluid m-0 p-0">
            @yield('footer')
        </div>

        <!-- Optional JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <!-- CDN Jsdelivr -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <!-- CDN Bootstrap StackPath -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <!-- Ajax GoogleApis -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- CDN Bootstrap MaxCDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>