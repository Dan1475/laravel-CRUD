<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars DB</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- link css -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- link js -->
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>


    </head>

    <body>
      <div class="wrapper">

        <header>
          <h1>Hello world from header</h1>
        </header>
        @yield('content')

        <footer>
        <h1>Hello from Footer</h1>
        </footer>
      </div>
    </body>

    </html>
