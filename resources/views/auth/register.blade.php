@extends('layouts.app')

@section('content')

    <body class="index">

    <div id="page-wrapper">

        <section id="banner" style="position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;">

            <div class="panel-body">
                {!! Form::open(['route' => 'register', 'method' => 'post']) !!}
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                    {!! Form::label('label-nom', 'Nom', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::text('nom', old('nom'), ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('nom'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br />
                <br />

                <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                    {!! Form::label('label-prenom', 'Prénom', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::text('prenom', old('prenom'), ['class' => 'form-control',  'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('prenom'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group{{ $errors->has('date-naissance') ? ' has-error' : '' }}">
                    {!! Form::label('label-date-naissance', 'Date de naissance', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::date('date-naissance', old('date-naissance'), ['class' => 'form-control']) !!}

                        @if ($errors->has('date-naissance'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('date-naissance') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group{{ $errors->has('permis') ? ' has-error' : '' }}">
                    {!! Form::label('label-permis', 'Permis de conduire', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::select('permis', ['1' => 'Oui', '0' => 'Non'], null, ['placeholder' => 'Avez-vous le permis de conduire ?']) !!}

                        @if ($errors->has('permis'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('permis') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group{{ $errors->has('no-telephone') ? ' has-error' : '' }}">
                    {!! Form::label('label-no-telephone', 'Numéro de téléphone', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::text('no-telephone', old('no-telephone'), ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('no-telephone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('no-telephone') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {!! Form::label('label-email', 'Adresse e-mail', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::email('email', old('email'), ['class' => 'form-control',  'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    {!! Form::label('label-password', 'Mot de passe', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::password('password', ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {!! Form::label('label-password-confirmation', 'Confirmez le mot de passe', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>
                <br/>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Je m\'inscris') !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
    </div>
    </body>

@endsection
