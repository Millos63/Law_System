@extends('layouts.app')

@section('template_title')
    {{ $promotionsAccord->name ?? __('Show') . " " . __('Promotions Accord') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Promotions Accord</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('promotions-accords.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Expedient:</strong>
                                    {{ $promotionsAccord->id_expedient }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion File:</strong>
                                    {{ $promotionsAccord->promotion_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion Date:</strong>
                                    {{ $promotionsAccord->promotion_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion Description:</strong>
                                    {{ $promotionsAccord->promotion_description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord File:</strong>
                                    {{ $promotionsAccord->accord_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord Date:</strong>
                                    {{ $promotionsAccord->accord_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord Description:</strong>
                                    {{ $promotionsAccord->accord_description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
