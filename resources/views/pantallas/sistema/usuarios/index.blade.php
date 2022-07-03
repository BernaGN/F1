@extends('adminlte::page')

@section('plugins.UI', true)

@section('title', 'Usuarios')

@section('content_header')
    {{ Breadcrumbs::render('users.index') }}
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <x-layouts.header title="Usuarios" message="Agregar" route="usuarios" icon="fas fa-users" />
                <div class="card-body">
                    <x-layouts.buscador route="usuarios" :buscar="$buscar" :activo="$activo" show="true" />
                    <x-tables.table :headers="['ID', 'Nombre', 'Email', 'Rol', 'Fecha de Creacion', 'Estado', 'Acciones']" id="usuarios">
                        @forelse ($usuarios as $usuario)
                            <tr>
                                <x-tables.td :key="true">{{ $usuario->id }}</x-tables.td>
                                <x-tables.td>{{ $usuario->fullName }}</x-tables.td>
                                <x-tables.td>{{ $usuario->email }}</x-tables.td>
                                <x-tables.td>{{ $usuario->roles->first()->name }}</x-tables.td>
                                <x-tables.td>{{ $usuario->created_at->diffForHumans() }}</x-tables.td>
                                <x-tables.td>
                                    @if ($usuario->deleted_at != null)
                                        <span class="badge badge-pill badge-danger">Inactivo</span>
                                    @else
                                        <span class="badge badge-pill badge-success">Activo</span>
                                    @endif
                                </x-tables.td>
                                <x-tables.td>
                                    <x-buttons.dropdown-eliminar :value="$usuario" route="usuarios" :viewId="false" />
                                </x-tables.td>
                            </tr>
                        @empty
                            <x-layouts.vacio />
                        @endforelse
                    </x-tables.table>
                    {{ $usuarios->appends(['buscar' => $buscar, 'activo' => $activo])->links() }}
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->

    <x-modals.modal-eliminar-restaurar type="delete" :value="$usuarios" route="usuarios.destroy" method="DELETE"
        message="Desactivar" />
    <x-modals.modal-eliminar-restaurar type="restore" :value="$usuarios" route="user-restore" method="PUT"
        message="Restaurar" bgColor="primary" />

    <!-- Modal -->
    <x-modals.confirm text="Agregar" />
@stop

@section('js')
    <script>
        $('#confirm-delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var slug = button.data('slug')
            var modal = $(this)
            modal.find('.modal-body #slugdelete').val(slug)
        })
        $('#confirm-restore').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var slug = button.data('slug')
            var modal = $(this)
            modal.find('.modal-body #slugrestore').val(slug)
        })
    </script>
@stop
