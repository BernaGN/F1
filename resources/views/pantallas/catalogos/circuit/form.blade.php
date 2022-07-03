<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $circuit->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('number_of_laps') }}
            {{ Form::text('number_of_laps', $circuit->number_of_laps, ['class' => 'form-control' . ($errors->has('number_of_laps') ? ' is-invalid' : ''), 'placeholder' => 'Number Of Laps']) }}
            {!! $errors->first('number_of_laps', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('circuit_length') }}
            {{ Form::text('circuit_length', $circuit->circuit_length, ['class' => 'form-control' . ($errors->has('circuit_length') ? ' is-invalid' : ''), 'placeholder' => 'Circuit Length']) }}
            {!! $errors->first('circuit_length', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('race_distance') }}
            {{ Form::text('race_distance', $circuit->race_distance, ['class' => 'form-control' . ($errors->has('race_distance') ? ' is-invalid' : ''), 'placeholder' => 'Race Distance']) }}
            {!! $errors->first('race_distance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('first_grand_prix') }}
            {{ Form::text('first_grand_prix', $circuit->first_grand_prix, ['class' => 'form-control' . ($errors->has('first_grand_prix') ? ' is-invalid' : ''), 'placeholder' => 'First Grand Prix']) }}
            {!! $errors->first('first_grand_prix', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>