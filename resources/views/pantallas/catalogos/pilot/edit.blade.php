@extends('adminlte::page')

@section('title', 'Pilotos')

@section('content_header')
    <h1>Update Pilot</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Pilot</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pilots.update', $pilot->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pantallas.catalogos.pilot.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
