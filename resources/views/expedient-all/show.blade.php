@extends('layouts.app')

@section('template_title')
    {{ $expedient->name ?? __('Show') . " " . __('Expedient') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Expedient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('expedients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Expedient Number:</strong>
                                    {{ $expedient->expedient_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expedient Date:</strong>
                                    {{ $expedient->expedient_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Client:</strong>
                                    {{ $expedient->id_client }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Authority:</strong>
                                    {{ $expedient->authority }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Judged:</strong>
                                    {{ $expedient->id_judged }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Judment:</strong>
                                    {{ $expedient->id_judment }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Expedient Link:</strong>
                                    {{ $expedient->expedient_link }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Counter Party:</strong>
                                    {{ $expedient->counter_party }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Judicial District:</strong>
                                    {{ $expedient->judicial_district }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Touch Number:</strong>
                                    {{ $expedient->touch_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Touch Room:</strong>
                                    {{ $expedient->touch_room }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Room Number:</strong>
                                    {{ $expedient->room_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Protection Number:</strong>
                                    {{ $expedient->protection_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Protection Authority:</strong>
                                    {{ $expedient->protection_authority }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
