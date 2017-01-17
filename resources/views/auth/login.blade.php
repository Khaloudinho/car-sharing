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
                {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('identifiant') ? ' has-error' : '' }}">
                    {!! Form::label('identifiant', 'Identifiant', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::email('identifiant', old('identifiant'), ['class' => 'form-control',  'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('identifiant'))
                            <span class="help-block">
                                <strong>{{ $errors->first('identifiant') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br/>
                <br/>

                <div class="form-group {{ $errors->has('mot-de-passe') ? ' has-error' : '' }}">
                    {!! Form::label('label-password', 'Mot de passe', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::password('mot-de-passe', ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('mot-de-passe'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mot-de-passe') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">

                        <a class="current" href="{{ url('/password/reset') }}">
                            Oubli de mot de passe ?
                        </a>

                        <br/>
                        <br/>
                        {!! Form::submit('Je me connecte') !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
    </body>

@endsection
