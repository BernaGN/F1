@extends('adminlte::page')

@section('plugins.Select2', true)

@section('title', 'Permisos')

@section('content_header')
    {{ Breadcrumbs::render('permiso.store') }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Permiso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('permisos.store') }}" role="form"
                            enctype="multipart/form-data" id="formulario" autocomplete="off"
                            onsubmit="return checkSubmit();">
                            @csrf
                            @include('catalogos.permission.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-modals.confirm text="Agregar" />
@stop

@section('js')
    <script>
        $('.select').select2();
        $('#formulario').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 25,
                },
                description: {
                    required: true,
                    maxlength: 200,
                },
                modulo_id: {
                    required: true
                },
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        })
    </script>
@stop
