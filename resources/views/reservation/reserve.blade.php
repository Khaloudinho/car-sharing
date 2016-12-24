@extends('layouts.app')

@section('content')

    <body class="index">

    <div id="page-wrapper">

        <section id="banner">

            <div class="panel-body">
                @foreach($reservationsuser as $reservation)
                    <div class="row">
                        <div class="4u 12u(narrower)">
                            <section>
                                <p></p>
                            </section>

                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>
    </body>

@endsection
