@extends('adminlte::page')

@section('title', 'Pilotos')

@section('content_header')
    <h1>Show Pilot</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pilot</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pilots.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $pilot->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $pilot->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $pilot->number }}
                        </div>
                        <div class="form-group">
                            <strong>Nationality Id:</strong>
                            {{ $pilot->nationality_id }}
                        </div>
                        <div class="form-group">
                            <strong>Podium:</strong>
                            {{ $pilot->podium }}
                        </div>
                        <div class="form-group">
                            <strong>Point:</strong>
                            {{ $pilot->point }}
                        </div>
                        <div class="form-group">
                            <strong>Grands Prix Entered:</strong>
                            {{ $pilot->grands_prix_entered }}
                        </div>
                        <div class="form-group">
                            <strong>World Championship:</strong>
                            {{ $pilot->world_championship }}
                        </div>
                        <div class="form-group">
                            <strong>Highest Race Finish:</strong>
                            {{ $pilot->highest_race_finish }}
                        </div>
                        <div class="form-group">
                            <strong>Count Highest Race Finish:</strong>
                            {{ $pilot->count_highest_race_finish }}
                        </div>
                        <div class="form-group">
                            <strong>Highest Race Position:</strong>
                            {{ $pilot->highest_race_position }}
                        </div>
                        <div class="form-group">
                            <strong>Date Of Birth:</strong>
                            {{ $pilot->date_of_birth }}
                        </div>
                        <div class="form-group">
                            <strong>Place Of Birth:</strong>
                            {{ $pilot->place_of_birth }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
