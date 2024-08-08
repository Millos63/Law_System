@extends('layouts.app')

@section('template_title')
    {{ $task->name ?? __('Show') . " " . __('Task') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Task</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id User:</strong>
                                    {{ $task->id_user }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Start Date:</strong>
                                    {{ $task->start_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Finish Date:</strong>
                                    {{ $task->finish_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Task:</strong>
                                    {{ $task->task }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
