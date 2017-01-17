@extends('layouts.app')

@section('content')

    <body class="index">
    <div id="page-wrapper">

        <!-- Header -->
    <!--<header id="header" class="alt">
					<h1 id="logo"><span>Site d'auto-partage de la ville : </span>Lemberg City</h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="{{ url('/home') }}">Accueil</a></li>

							<li><a href="{{ url('/register') }}" class="button special">Inscription</a></li>
						</ul>
					</nav>
				</header>-->

        <section id="banner">

            <div class="inner">

                <header>
                    <h2>Nos véhicules</h2>
                </header>
                <p><strong>Lemberg City</strong> dispose de véhicules d'exception, ici vous
                    <br/>
                    pouvez simplement réserver un véhicule pour une durée quelconque.
                    <br/>
                </p>
                <footer>
                    <ul class="buttons vertical">
                        <li><a href="#main" class="button fit scrolly">Réserver</a></li>
                    </ul>
                </footer>

            </div>

        </section>

        <article id="main">

            <!-- Two -->
            <section class="wrapper style1 container special">


                @foreach($vehicules as $vehicule)
                    <div class="row">
                        <div class="4u 12u(narrower)">
                            <section>
                                <!--j'ai essaye de faire ça cleen mais meme l'id ne prend pas le dessus pour cette raison c'est en dur-->
                                <img src="{{ asset('/assets/images/imagesVehicules/'.$vehicule->image) }}" alt="{{ $vehicule->modele }}" id="imagecustom" style="max-width: 300px;
                                     max-height: 300px;">
                                <header>
                                    <h3>{{ $vehicule->marque." ".$vehicule->modele }}</h3>
                                </header>
                                <p>Capacité du réservoir: {{ $vehicule->carburant_max }} l</p>
                                @if ($vehicule->gamme == \App\TypeVehicule::BAS_GAMME)
                                    <p>Gamme du véhicule: bas de gamme</p>
                                @elseif ($vehicule->gamme == \App\TypeVehicule::MOYEN_GAMME)
                                    <p>Gamme du véhicule: moyen gamme</p>
                                @else
                                    <p>Gamme du véhicule: haut de gamme</p>
                                @endif

                                    <p>Base tarifaire: {{ $vehicule->base_tarifaire }} €/jour</p>

                                <div class="col-md-6 col-md-offset-0">
                                    {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                                    {!! Form::label('date_debut', 'Date debut de location :') !!}
                                    {!! Form::date('date_debut') !!}
                                    {!! Form::label('date_retour', 'Date retour de location :') !!}
                                    {!! Form::date('date_retour') !!}
                                    {!! Form::hidden('vehiculeSelectionne', $vehicule) !!}
                                    {!! Form::submit('Je réserve') !!}
                                    {!! Form::close() !!}
                                </div>
                            </section>

                        </div>
                    </div>
                @endforeach


            </section>
        </article>

        <!-- CTA -->
        <section id="cta">

            <header>
                <h2>Ready to do <strong>something</strong>?</h2>
                <p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
            </header>
            <footer>
                <ul class="buttons">
                    <li><a href="#" class="button special">Take My Money</a></li>
                    <li><a href="#" class="button">LOL Wut</a></li>
                </ul>
            </footer>

        </section>

        <!-- Footer -->
        <footer id="footer">

            <ul class="icons">
                <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
                <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
            </ul>

            <ul class="copyright">
                <li>&copy; Untitled</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>

        </footer>

    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.dropotron.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.scrolly.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/jquery.scrollgress.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/skel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/js/util.js') }}"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="{{ asset('/assets/js/ie/respond.min.js') }}"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('/assets/js/main.js') }}"></script>

    </body>
    </html>