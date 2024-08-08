@extends('layouts.app')

@section('template_title')
    {{ $expedientFile->name ?? __('Show') . " " . __('Expedient File') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Expedient File</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('expedient-files.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Expedient:</strong>
                                    {{ $expedientFile->id_expedient }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>File:</strong>
                                    {{ $expedientFile->file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>File Date:</strong>
                                    {{ $expedientFile->file_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Description:</strong>
                                    {{ $expedientFile->description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
