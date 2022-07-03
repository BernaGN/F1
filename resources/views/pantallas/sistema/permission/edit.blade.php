@extends('adminlte::page')

@section('plugins.Select2', true)

@section('title', 'Permisos')

@section('content_header')
    {{ Breadcrumbs::render('permiso.update', $permission) }}
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Permiso</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('permisos.update', $permission) }}" role="form"
                            enctype="multipart/form-data" id="formulario" autocomplete="off"
                            onsubmit="return checkSubmit();">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('catalogos.permission.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-modals.confirm text="Editar" />
@stop

@section('js')
    <script>
        $('.select').select2();
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
