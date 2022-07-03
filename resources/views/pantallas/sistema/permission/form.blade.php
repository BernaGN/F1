<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group position-relative">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $permission->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre', 'required']) }}
            {!! $errors->first('name', '<div class="invalid-tooltip">:message</div>') !!}
        </div>
        <div class="form-group position-relative">
            {{ Form::label('descripcion') }}
            {{ Form::text('description', $permission->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'required']) }}
            {!! $errors->first('description', '<div class="invalid-tooltip">:message</div>') !!}
        </div>
        <div class="form-group position-relative">
            {{ Form::label('Modulo') }}
            {{ Form::select('modulo_id', $modulos, $permission->modulo_id, ['class' => 'form-control select' . ($errors->has('modulo_id') ? ' is-invalid' : ''), 'required']) }}
            {!! $errors->first('modulo_id', '<div class="invalid-tooltip">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="button" class="btn btn-sm btn-primary" id="enviar">
            Guardar
        </button>
        <a href="{{ route('permisos.index') }}" class="btn btn-sm btn-default">Cancelar</a>
    </div>
</div>
