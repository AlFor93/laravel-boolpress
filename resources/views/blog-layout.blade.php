<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolpress</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- My Css -->
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <!-- My Script -->
        <script src="{{ mix('js/app.js') }}" charset="utf-8" ></script>



    </head>
    <body>
      <div class="container">

        @yield('content')
      </div>
    </body>
</html>
