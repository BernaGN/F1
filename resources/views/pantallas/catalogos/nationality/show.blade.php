@extends('adminlte::page')

@section('title', 'Nacionalidades')

@section('content_header')
    <h1>Show Nationality</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Nationality</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('nationalities.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $nationality->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
