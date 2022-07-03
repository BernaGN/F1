@extends('adminlte::page')

@section('title', 'Circuito')

@section('content_header')
    {{ $circuit->name ?? 'Show Circuit' }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Circuit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('circuits.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $circuit->name }}
                        </div>
                        <div class="form-group">
                            <strong>Number Of Laps:</strong>
                            {{ $circuit->number_of_laps }}
                        </div>
                        <div class="form-group">
                            <strong>Circuit Length:</strong>
                            {{ $circuit->circuit_length }}
                        </div>
                        <div class="form-group">
                            <strong>Race Distance:</strong>
                            {{ $circuit->race_distance }}
                        </div>
                        <div class="form-group">
                            <strong>First Grand Prix:</strong>
                            {{ $circuit->first_grand_prix }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
