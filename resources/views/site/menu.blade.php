<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    {{--  <link rel="stylesheet" href="{{ asset('css/app.css') }}">  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @vite(['resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
        <div class="container">
            <a href="" class="navbar-brand">Uniao Espiritualista Nossa Casa</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/site'); ?>" class="nav-link">Pagina Inicial</a></li>
            <li class="nav-item"><a href="<?= url('/cadastro'); ?>" class="nav-link">Cadastro</a></li>
            <li class="nav-item"> <a href="<?= url('/login'); ?>"class="nav-link">Login</a></li>
        </ul>
        </div>
    </nav>

    @yield('content')

    <script src="<?= asset('js/app.js');?>"></script>
    </body>
    </html>


