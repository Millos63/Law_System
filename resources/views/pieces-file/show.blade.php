@extends('layouts.app')

@section('template_title')
    {{ $piecesFile->name ?? __('Show') . " " . __('Pieces File') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pieces File</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pieces-files.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Piece:</strong>
                                    {{ $piecesFile->id_piece }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start File:</strong>
                                    {{ $piecesFile->start_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start Description:</strong>
                                    {{ $piecesFile->start_description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start Date:</strong>
                                    {{ $piecesFile->start_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Finish File:</strong>
                                    {{ $piecesFile->finish_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Finish Description:</strong>
                                    {{ $piecesFile->finish_description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Finish Date:</strong>
                                    {{ $piecesFile->finish_date }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
