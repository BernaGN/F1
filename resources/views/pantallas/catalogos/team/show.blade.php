@extends('adminlte::page')

@section('title', 'Nacionalidades')

@section('content_header')
    {{ $team->name ?? 'Show Team' }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Team</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teams.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $team->name }}
                        </div>
                        <div class="form-group">
                            <strong>Full Team Name:</strong>
                            {{ $team->full_team_name }}
                        </div>
                        <div class="form-group">
                            <strong>Pilot Id:</strong>
                            {{ $team->pilot_id }}
                        </div>
                        <div class="form-group">
                            <strong>Base:</strong>
                            {{ $team->base }}
                        </div>
                        <div class="form-group">
                            <strong>Team Chief:</strong>
                            {{ $team->team_chief }}
                        </div>
                        <div class="form-group">
                            <strong>Technical Chief:</strong>
                            {{ $team->technical_chief }}
                        </div>
                        <div class="form-group">
                            <strong>Chasis:</strong>
                            {{ $team->chasis }}
                        </div>
                        <div class="form-group">
                            <strong>Power Unit:</strong>
                            {{ $team->power_unit }}
                        </div>
                        <div class="form-group">
                            <strong>First Team Entry:</strong>
                            {{ $team->first_team_entry }}
                        </div>
                        <div class="form-group">
                            <strong>World Championship:</strong>
                            {{ $team->world_championship }}
                        </div>
                        <div class="form-group">
                            <strong>Highest Race Finish:</strong>
                            {{ $team->highest_race_finish }}
                        </div>
                        <div class="form-group">
                            <strong>Count Highest Race Finish:</strong>
                            {{ $team->count_highest_race_finish }}
                        </div>
                        <div class="form-group">
                            <strong>Pole Position:</strong>
                            {{ $team->pole_position }}
                        </div>
                        <div class="form-group">
                            <strong>Fastest Laps:</strong>
                            {{ $team->fastest_laps }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
