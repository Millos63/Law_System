@extends('layouts.app')

@section('template_title')
    {{ $piece->name ?? __('Show') . " " . __('Piece') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Piece</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pieces.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Expedient:</strong>
                                    {{ $piece->id_expedient }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Piece Type:</strong>
                                    {{ $piece->piece_type }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Piece Number:</strong>
                                    {{ $piece->piece_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Review Authority:</strong>
                                    {{ $piece->review_authority }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Review Number:</strong>
                                    {{ $piece->review_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Complaint Authority:</strong>
                                    {{ $piece->complaint_authority }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Complaint Number:</strong>
                                    {{ $piece->complaint_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observations:</strong>
                                    {{ $piece->observations }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
