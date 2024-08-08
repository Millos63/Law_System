@extends('layouts.app')

@section('template_title')
    {{ $observation->name ?? __('Show') . " " . __('Observation') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Observation</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('observations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Expedient:</strong>
                                    {{ $observation->id_expedient }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id User:</strong>
                                    {{ $observation->id_user }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observation:</strong>
                                    {{ $observation->observation }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Instruction:</strong>
                                    {{ $observation->instruction }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observation Date:</strong>
                                    {{ $observation->observation_date }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
