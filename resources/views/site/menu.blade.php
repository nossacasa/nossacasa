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
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=ee251b2e366fd8325168a7c17e83be281">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<script type="text/javascript" src="/media/js/site.js?_=354829d85c66f61a3a9a975f0688f684" data-domain="datatables.net" data-api="https://plausible.sprymedia.co.uk/api/event"></script>
	<script defer async src="https://media.ethicalads.io/media/client/ethicalads.min.js" onload="window.dtAds()" onerror="window.dtAds()"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" class="init">

$(document).ready(function () {
	$('#example').DataTable();
});

	</script>

    @vite(['resources/js/app.js'])

</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
        <div class="container">
            <a href="" class="navbar-brand">Uniao Espiritualista Nossa Casa</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/site'); ?>" class="nav-link">Pagina Inicial</a></li>
            <li class="nav-item"><a href="<?= url('/atendimento'); ?>" class="nav-link">Atendimento</a></li>
            <li class="nav-item"><a href="<?= url('/cadastro'); ?>" class="nav-link">Cadastro</a></li>
            <li class="nav-item"> <a href="<?= url('/login'); ?>"class="nav-link">Login</a></li>
        </ul>
        </div>
    </nav>
    <?php
    echo date("d/m/Y");
    ?>

    @yield('content')

    <script src="<?= asset('js/app.js');?>"></script>
    </body>
    </html>


