<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lemberg City</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--[if lte IE 8]>
    <script type="text/javascript" src="{{ asset('/assets/js/ie/html5shiv.js') }}"></script>
    <![endif]-->

    <link href="{{ asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css"/>

    <!--[if lte IE 8]>
    <link href="{{ asset('/assets/css/ie8.css') }}" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link href="{{ asset('/assets/css/ie9.css') }}" rel="stylesheet" type="text/css"/>
    <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?= json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>

<body>
<div id="app">
    <header id="header" class="alt">
        <h1 id="logo"><span>Site d'auto-partage de la ville : </span>Lemberg City</h1>
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{ url('/home') }}">Accueil</a></li>

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" class="current">Se connecter</a></li>
                    <li><a href="{{ url('/register') }}" class="button special">Inscription</a></li>
                @else
                    <li><a href="{{ url('/logout') }}" class="current"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Se déconnecter </a></li>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                          style="display: none;">{{ csrf_field() }} </form>
                    <li><a href="" class="current">bonjour, {{ Auth::user()->prenom }}</a></li>
                @endif
            </ul>
        </nav>
    </header>

    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
