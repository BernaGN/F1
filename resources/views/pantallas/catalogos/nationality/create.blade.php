@extends('adminlte::page')

@section('title', 'Nacionalidades')

@section('content_header')
    <h1>Create Nationality</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Nationality</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nationalities.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('pantallas.catalogos.nationality.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
