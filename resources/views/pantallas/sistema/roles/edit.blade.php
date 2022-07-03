@extends('adminlte::page')

@section('plugins.Switch', true)

@section('title', 'Roles')

@section('content_header')
    {{ Breadcrumbs::render('roles.update', $role) }}
@stop

@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Rol</span>
                    </div>
                    <div class="card-body">
                        {!! Form::model($role, ['route' => ['roles.update', $role], 'method' => 'put', 'id' => 'formulario', 'autocomplete' => 'off', 'onsubmit' => 'return checkSubmit();']) !!}
                        @include('Sistema.roles.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-modals.confirm text="Editar" />
@stop

@section('js')
    <script>
        $('input[type="checkbox"]').bootstrapSwitch({
            onText: "Si",
            offText: 'No'
        });
        $('#formulario').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 25
                },
                permissions: {
                    required: true,
                }
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
