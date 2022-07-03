@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    <h1>Team</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                Equipos
                            </span>

                            <div class="float-right">
                                <a href="{{ route('teams.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    Agregar
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Name</th>
                                        <th>Full Team Name</th>
                                        <th>Pilot Id</th>
                                        <th>Base</th>
                                        <th>Team Chief</th>
                                        <th>Technical Chief</th>
                                        <th>Chasis</th>
                                        <th>Power Unit</th>
                                        <th>First Team Entry</th>
                                        <th>World Championship</th>
                                        <th>Highest Race Finish</th>
                                        <th>Count Highest Race Finish</th>
                                        <th>Pole Position</th>
                                        <th>Fastest Laps</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $team->name }}</td>
                                            <td>{{ $team->full_team_name }}</td>
                                            <td>{{ $team->pilot_id }}</td>
                                            <td>{{ $team->base }}</td>
                                            <td>{{ $team->team_chief }}</td>
                                            <td>{{ $team->technical_chief }}</td>
                                            <td>{{ $team->chasis }}</td>
                                            <td>{{ $team->power_unit }}</td>
                                            <td>{{ $team->first_team_entry }}</td>
                                            <td>{{ $team->world_championship }}</td>
                                            <td>{{ $team->highest_race_finish }}</td>
                                            <td>{{ $team->count_highest_race_finish }}</td>
                                            <td>{{ $team->pole_position }}</td>
                                            <td>{{ $team->fastest_laps }}</td>

                                            <td>
                                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('teams.show', $team->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('teams.edit', $team->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $teams->links() !!}
            </div>
        </div>
    </div>
@stop
