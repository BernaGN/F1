@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Piloto</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Piloto
                        </span>

                        <div class="float-right">
                            <a href="{{ route('pilots.create') }}" class="btn btn-primary btn-sm float-right"
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
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Nationality Id</th>
                                    <th>Podium</th>
                                    <th>Point</th>
                                    <th>Grands Prix Entered</th>
                                    <th>World Championship</th>
                                    <th>Highest Race Finish</th>
                                    <th>Count Highest Race Finish</th>
                                    <th>Highest Race Position</th>
                                    <th>Date Of Birth</th>
                                    <th>Place Of Birth</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pilots as $pilot)
                                    <tr>
                                        <td>{{ $pilot->id }}</td>

                                        <td>{{ $pilot->name }}</td>
                                        <td>{{ $pilot->last_name }}</td>
                                        <td>{{ $pilot->number }}</td>
                                        <td>{{ $pilot->nationality_id }}</td>
                                        <td>{{ $pilot->podium }}</td>
                                        <td>{{ $pilot->point }}</td>
                                        <td>{{ $pilot->grands_prix_entered }}</td>
                                        <td>{{ $pilot->world_championship }}</td>
                                        <td>{{ $pilot->highest_race_finish }}</td>
                                        <td>{{ $pilot->count_highest_race_finish }}</td>
                                        <td>{{ $pilot->highest_race_position }}</td>
                                        <td>{{ $pilot->date_of_birth }}</td>
                                        <td>{{ $pilot->place_of_birth }}</td>

                                        <td>
                                            <form action="{{ route('pilots.destroy', $pilot->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('pilots.show', $pilot->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('pilots.edit', $pilot->id) }}"><i
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
            {!! $pilots->links() !!}
        </div>
    </div>
@stop
