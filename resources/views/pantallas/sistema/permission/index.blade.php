@extends('adminlte::page')

@section('title', 'Permisos')

@section('content_header')
    {{ Breadcrumbs::render('permiso.index') }}
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <x-layouts.header title="Permisos" message="Agregar" route="permisos" modalName="agregar"
                    icon="fas fa-check-double" />
                <div class="card-body">
                    <x-layouts.buscador route="permisos" :buscar="$buscar" />
                    <x-tables.table :headers="['ID', 'Modulo', 'Permiso', 'Descripcion', 'Acciones']" id="permisos">
                        @forelse ($permissions as $permission)
                            <tr>
                                <x-tables.td :key="true">{{ $permission->id }}</x-tables.td>
                                <x-tables.td>{{ $permission->modulo->name }}</x-tables.td>
                                <x-tables.td>{{ $permission->name }}</x-tables.td>
                                <x-tables.td>{{ $permission->description }}</x-tables.td>
                                <x-tables.td>
                                    <x-buttons.dropdown route="permisos" :value="$permission" />
                                </x-tables.td>
                            </tr>
                        @empty
                            <x-layouts.vacio />
                        @endforelse
                    </x-tables.table>
                    {{ $permissions->appends(['buscar' => $buscar])->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
