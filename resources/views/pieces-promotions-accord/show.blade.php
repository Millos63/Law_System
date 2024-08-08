@extends('layouts.app')

@section('template_title')
    {{ $piecesPromotionsAccord->name ?? __('Show') . " " . __('Pieces Promotions Accord') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pieces Promotions Accord</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('pieces-promotions-accords.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Piece:</strong>
                                    {{ $piecesPromotionsAccord->id_piece }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion File:</strong>
                                    {{ $piecesPromotionsAccord->promotion_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion Date:</strong>
                                    {{ $piecesPromotionsAccord->promotion_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Promotion Description:</strong>
                                    {{ $piecesPromotionsAccord->promotion_description }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord File:</strong>
                                    {{ $piecesPromotionsAccord->accord_file }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord Date:</strong>
                                    {{ $piecesPromotionsAccord->accord_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accord Description:</strong>
                                    {{ $piecesPromotionsAccord->accord_description }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
