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

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Envoi de demande de nouveau de mot de passe') !!}
                        <a class="current" href="{{ url('/password/reset') }}">
                        </a>
                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </section>
    </div>
    </div>
    </body>

@endsection

