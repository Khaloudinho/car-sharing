@extends('layouts.app')

@section('content')

    <body class="index">

    <div id="page-wrapper">

        <section id="banner">

            <div class="panel-body">
                {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                {{ csrf_field() }}

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
                        {!! Form::submit('Changer le mot de passe') !!}
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
    </div>
    </body>

@endsection

