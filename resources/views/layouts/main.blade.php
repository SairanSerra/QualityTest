<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>@yield('title')</title>

    </head>
    <body class="mb-10">
        <nav class="navbar navbar-dark bg-dark h-3">
            <div class="ms-4">
                <a class="text-white fs-4 ms-3 text-decoration-none" href="{{route('client')}}">Clientes</a>
                <a class="text-white fs-4 ms-3 text-decoration-none" href="">Cadastro</a>
            </div>
          </nav>
        @yield('content')
            <footer class="text-center position-absolute top-100 start-50">
            <p class="">Sairan Serra &copy; 2022</p>
            </footer>


    </body>


</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
