<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $pilot->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_name') }}
            {{ Form::text('last_name', $pilot->last_name, ['class' => 'form-control' . ($errors->has('last_name') ? ' is-invalid' : ''), 'placeholder' => 'Last Name']) }}
            {!! $errors->first('last_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number') }}
            {{ Form::text('number', $pilot->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nationality_id') }}
            {{ Form::text('nationality_id', $pilot->nationality_id, ['class' => 'form-control' . ($errors->has('nationality_id') ? ' is-invalid' : ''), 'placeholder' => 'Nationality Id']) }}
            {!! $errors->first('nationality_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('podium') }}
            {{ Form::text('podium', $pilot->podium, ['class' => 'form-control' . ($errors->has('podium') ? ' is-invalid' : ''), 'placeholder' => 'Podium']) }}
            {!! $errors->first('podium', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('point') }}
            {{ Form::text('point', $pilot->point, ['class' => 'form-control' . ($errors->has('point') ? ' is-invalid' : ''), 'placeholder' => 'Point']) }}
            {!! $errors->first('point', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grands_prix_entered') }}
            {{ Form::text('grands_prix_entered', $pilot->grands_prix_entered, ['class' => 'form-control' . ($errors->has('grands_prix_entered') ? ' is-invalid' : ''), 'placeholder' => 'Grands Prix Entered']) }}
            {!! $errors->first('grands_prix_entered', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('world_championship') }}
            {{ Form::text('world_championship', $pilot->world_championship, ['class' => 'form-control' . ($errors->has('world_championship') ? ' is-invalid' : ''), 'placeholder' => 'World Championship']) }}
            {!! $errors->first('world_championship', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('highest_race_finish') }}
            {{ Form::text('highest_race_finish', $pilot->highest_race_finish, ['class' => 'form-control' . ($errors->has('highest_race_finish') ? ' is-invalid' : ''), 'placeholder' => 'Highest Race Finish']) }}
            {!! $errors->first('highest_race_finish', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('count_highest_race_finish') }}
            {{ Form::text('count_highest_race_finish', $pilot->count_highest_race_finish, ['class' => 'form-control' . ($errors->has('count_highest_race_finish') ? ' is-invalid' : ''), 'placeholder' => 'Count Highest Race Finish']) }}
            {!! $errors->first('count_highest_race_finish', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('highest_race_position') }}
            {{ Form::text('highest_race_position', $pilot->highest_race_position, ['class' => 'form-control' . ($errors->has('highest_race_position') ? ' is-invalid' : ''), 'placeholder' => 'Highest Race Position']) }}
            {!! $errors->first('highest_race_position', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_of_birth') }}
            {{ Form::text('date_of_birth', $pilot->date_of_birth, ['class' => 'form-control' . ($errors->has('date_of_birth') ? ' is-invalid' : ''), 'placeholder' => 'Date Of Birth']) }}
            {!! $errors->first('date_of_birth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('place_of_birth') }}
            {{ Form::text('place_of_birth', $pilot->place_of_birth, ['class' => 'form-control' . ($errors->has('place_of_birth') ? ' is-invalid' : ''), 'placeholder' => 'Place Of Birth']) }}
            {!! $errors->first('place_of_birth', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>