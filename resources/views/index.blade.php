@extends('layouts.app')

@section('content')

	<body class="index">
		<div id="page-wrapper">
				<section id="banner">

					<div class="inner">

						<header>
							<h2>Page d'accueil</h2>
						</header>
						<p>Bienvenue sur le site web de <strong>Lemberg City</strong>, ici vous
                            <br />
                            pouvez simplement réserver un véhicule pour une durée quelconque.
                            <br />
						</p>
						<footer>
							<ul class="buttons vertical">
								<li><a href="#main" class="button fit scrolly">En savoir plus</a></li>
							</ul>
						</footer>

					</div>

				</section>

				<article id="main">

					<header class="special container">
						<span class="icon fa-bar-chart-o"></span>

						<h1 style="font-weight: bold; size: 25px;">Voici l'ensemble des véhicules disponibles à la réservation</h1>

							<table style="border:1px solid black; text-align: center;">
								<tr style="border:1px solid black; font-weight: bold;">
									<th style="border:1px solid black; text-align: center;">Modèle</th>
									<th style="border:1px solid black; text-align: center;">Marque</th>
									<th style="border:1px solid black; text-align: center;">Immatriculation</th>
									<th style="border:1px solid black; text-align: center;">Réservoir</th>
									<th style="border:1px solid black; text-align: center;">Date du prochain entretien</th>
								</tr>
								@foreach($voitures as $voitures)
								<tr style="border:1px solid black;">
									<td style="border:1px solid black;">{{ $voitures->modele }}</td>
									<td style="border:1px solid black;">{{ $voitures->marque }}</td>
									<td style="border:1px solid black;">{{ $voitures->immatriculation }}</td>
									<td style="border:1px solid black;">{{ $voitures->carburant_max }} L</td>
									<td style="border:1px solid black;">{{ $voitures->prochain_entretien }}</td>
								</tr>
								@endforeach
							</table>
					</header>

					<!-- One -->
						<section class="wrapper style1 container special-alt">
							<div class="col-sm-offset-3 col-sm-6">
								<div class="panel panel-info">
									<div class="panel-heading">Réservation d'un véhicule</div>
										<div class="panel-body">
											{!! Form::open(['url' => 'home']) !!}
										<div class="form-group {!! $errors->has('id_vehicule') ? 'has-error' : '' !!}">
											{!! Form::label('id_vehicule', 'Véhicule à réserver :  ') !!}
											<select name="liste_vehicules">
												@foreach($listeVehicules as $v)
													<option value="{{ $v->id_vehicule }}">{{ $v->marque }} {{ $v->modele }}</option>
												@endforeach
											</select>
											{!! $errors->first('id_vehicule', '<small class="help-block">:message</small>') !!}
										</div>
										<div class="form-group {!! $errors->has('date_debut') ? 'has-error' : '' !!}">
											{!! Form::label('date_debut', 'Date de début de réservation') !!}
											{!! Form::date('date_debut', null, ['class' => 'form-control', 'placeholder' => 'Contenu']) !!}
											{!! $errors->first('date_debut', '<small class="help-block">:message</small>') !!}
										</div>
										<div class="form-group {{ $errors->has('date_retour') ? 'has-error' : '' }}">
											{!! Form::label('date_retour', 'Date de fin de réservation') !!}
											{!! Form::date('date_retour', null, ['class' => 'form-control']) !!}
											{!! $errors->first('date_retour', '<small class="help-block">:message</small>') !!}
										</div>
											{!! Form::submit('Réserver !', ['class' => 'btn btn-info pull-right']) !!}
											{!! Form::close() !!}
									</div>
								</div>
							</div>
						</section>

			<!-- Footer -->
				<footer id="footer">

					<ul class="copyright">
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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