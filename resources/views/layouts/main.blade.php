<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>

    </head>
    <body class="mb-10">
        @include('layouts.navbar')
        @yield('content')
            <footer class="text-center  position-relative h-100 ">
            <p class="">Sairan Serra &copy; 2022</p>
            </footer>


    </body>


</html>

@include('layouts.scripts')

