@extends('adminlte::page')

@section('title', 'Circuito')

@section('content_header')
    Update Circuit
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Circuit</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('circuits.update', $circuit->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('circuit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
