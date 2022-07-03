@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    Update Team
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Team</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teams.update', $team->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pantallas.catalogos.team.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
