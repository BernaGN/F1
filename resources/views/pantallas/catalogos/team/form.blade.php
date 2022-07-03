<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $team->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('full_team_name') }}
            {{ Form::text('full_team_name', $team->full_team_name, ['class' => 'form-control' . ($errors->has('full_team_name') ? ' is-invalid' : ''), 'placeholder' => 'Full Team Name']) }}
            {!! $errors->first('full_team_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pilot_id') }}
            {{ Form::text('pilot_id', $team->pilot_id, ['class' => 'form-control' . ($errors->has('pilot_id') ? ' is-invalid' : ''), 'placeholder' => 'Pilot Id']) }}
            {!! $errors->first('pilot_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('base') }}
            {{ Form::text('base', $team->base, ['class' => 'form-control' . ($errors->has('base') ? ' is-invalid' : ''), 'placeholder' => 'Base']) }}
            {!! $errors->first('base', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_chief') }}
            {{ Form::text('team_chief', $team->team_chief, ['class' => 'form-control' . ($errors->has('team_chief') ? ' is-invalid' : ''), 'placeholder' => 'Team Chief']) }}
            {!! $errors->first('team_chief', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('technical_chief') }}
            {{ Form::text('technical_chief', $team->technical_chief, ['class' => 'form-control' . ($errors->has('technical_chief') ? ' is-invalid' : ''), 'placeholder' => 'Technical Chief']) }}
            {!! $errors->first('technical_chief', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chasis') }}
            {{ Form::text('chasis', $team->chasis, ['class' => 'form-control' . ($errors->has('chasis') ? ' is-invalid' : ''), 'placeholder' => 'Chasis']) }}
            {!! $errors->first('chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('power_unit') }}
            {{ Form::text('power_unit', $team->power_unit, ['class' => 'form-control' . ($errors->has('power_unit') ? ' is-invalid' : ''), 'placeholder' => 'Power Unit']) }}
            {!! $errors->first('power_unit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_team_entry') }}
            {{ Form::text('first_team_entry', $team->first_team_entry, ['class' => 'form-control' . ($errors->has('first_team_entry') ? ' is-invalid' : ''), 'placeholder' => 'First Team Entry']) }}
            {!! $errors->first('first_team_entry', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('world_championship') }}
            {{ Form::text('world_championship', $team->world_championship, ['class' => 'form-control' . ($errors->has('world_championship') ? ' is-invalid' : ''), 'placeholder' => 'World Championship']) }}
            {!! $errors->first('world_championship', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('highest_race_finish') }}
            {{ Form::text('highest_race_finish', $team->highest_race_finish, ['class' => 'form-control' . ($errors->has('highest_race_finish') ? ' is-invalid' : ''), 'placeholder' => 'Highest Race Finish']) }}
            {!! $errors->first('highest_race_finish', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('count_highest_race_finish') }}
            {{ Form::text('count_highest_race_finish', $team->count_highest_race_finish, ['class' => 'form-control' . ($errors->has('count_highest_race_finish') ? ' is-invalid' : ''), 'placeholder' => 'Count Highest Race Finish']) }}
            {!! $errors->first('count_highest_race_finish', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pole_position') }}
            {{ Form::text('pole_position', $team->pole_position, ['class' => 'form-control' . ($errors->has('pole_position') ? ' is-invalid' : ''), 'placeholder' => 'Pole Position']) }}
            {!! $errors->first('pole_position', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fastest_laps') }}
            {{ Form::text('fastest_laps', $team->fastest_laps, ['class' => 'form-control' . ($errors->has('fastest_laps') ? ' is-invalid' : ''), 'placeholder' => 'Fastest Laps']) }}
            {!! $errors->first('fastest_laps', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>