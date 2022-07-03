@extends('adminlte::page')

@section('title', 'Circuito')

@section('content_header')
    Circuit
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            Circuito
                        </span>

                        <div class="float-right">
                            <a href="{{ route('circuits.create') }}" class="btn btn-primary btn-sm float-right"
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
                                    <th>Number Of Laps</th>
                                    <th>Circuit Length</th>
                                    <th>Race Distance</th>
                                    <th>First Grand Prix</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($circuits as $circuit)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $circuit->name }}</td>
                                        <td>{{ $circuit->number_of_laps }}</td>
                                        <td>{{ $circuit->circuit_length }}</td>
                                        <td>{{ $circuit->race_distance }}</td>
                                        <td>{{ $circuit->first_grand_prix }}</td>

                                        <td>
                                            <form action="{{ route('circuits.destroy', $circuit->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary "
                                                    href="{{ route('circuits.show', $circuit->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success"
                                                    href="{{ route('circuits.edit', $circuit->id) }}"><i
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
            {!! $circuits->links() !!}
        </div>
    </div>
@stop
