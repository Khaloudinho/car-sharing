@extends('layouts.app')

@section('content')

    <body class="index">

    <div id="page-wrapper">

        <section id="banner">

            <div class="panel-body">
                {!! Form::open(['route' => '/reservee', 'method' => 'post']) !!}
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('duree') ? ' has-error' : '' }}">
                    {!! Form::label('label-duree', 'Durée de la réservation', ['class' => 'col-md-4 control-label']) !!}

                    <div class="col-md-6">
                        {!! Form::text('duree', ['class' => 'form-control', 'style' => 'border: 1px solid white']) !!}

                        @if ($errors->has('duree'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('duree') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <br/>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Je réserve') !!}
                        {!! Form::close() !!}
                    </div>
                </div>

                </div>
            </section>
        </div>
    </body>

@endsection
