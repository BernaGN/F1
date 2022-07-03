@extends('adminlte::page')

@section('title', 'Equipos')

@section('content_header')
    Create Team
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Team</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('teams.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('pantallas.catalogos.team.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
