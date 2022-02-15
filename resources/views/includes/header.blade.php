<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Lista de Veículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="{{ asset('/vendor/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css" />
	<link href="/assets/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/select2.min.js"></script>
    
	</head>
	<body>


    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        @if(Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('vehicles') }}"><i class="fa fa-cart-plus" aria-hidden="true"></i> Meus veículos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
        </li>
        @else

        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-sign" aria-hidden="true"></i> Entrar</a>
        </li>

        @endif
        
    </ul>