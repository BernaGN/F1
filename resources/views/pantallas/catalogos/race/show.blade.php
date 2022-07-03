@extends('layouts.app')

@section('template_title')
    {{ $race->name ?? 'Show Race' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Race</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('races.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $race->name }}
                        </div>
                        <div class="form-group">
                            <strong>Circuit Id:</strong>
                            {{ $race->circuit_id }}
                        </div>
                        <div class="form-group">
                            <strong>Race Result Id:</strong>
                            {{ $race->race_result_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
