@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? __('Show') . " " . __('Client') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Client</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>First Name:</strong>
                                    {{ $client->first_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Last Name:</strong>
                                    {{ $client->last_name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direction:</strong>
                                    {{ $client->direction }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender:</strong>
                                    {{ $client->gender }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone Number:</strong>
                                    {{ $client->phone_number }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Age:</strong>
                                    {{ $client->age }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
