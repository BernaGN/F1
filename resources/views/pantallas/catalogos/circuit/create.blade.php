@extends('adminlte::page')

@section('title', 'Circuito')

@section('content_header')
    Create Circuit
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Circuit</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('circuits.store') }}" role="form"
                            enctype="multipart/form-data">
                            @csrf

                            @include('pantallas.catalogos.circuit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
