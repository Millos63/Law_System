<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Id User') }}</label>
            <input type="text" name="id_user" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user', $task?->id_user) }}" id="id_user" placeholder="Id User">
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_date" class="form-label">{{ __('Start Date') }}</label>
            <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $task?->start_date) }}" id="start_date" placeholder="Start Date">
            {!! $errors->first('start_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="finish_date" class="form-label">{{ __('Finish Date') }}</label>
            <input type="text" name="finish_date" class="form-control @error('finish_date') is-invalid @enderror" value="{{ old('finish_date', $task?->finish_date) }}" id="finish_date" placeholder="Finish Date">
            {!! $errors->first('finish_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="task" class="form-label">{{ __('Task') }}</label>
            <input type="text" name="task" class="form-control @error('task') is-invalid @enderror" value="{{ old('task', $task?->task) }}" id="task" placeholder="Task">
            {!! $errors->first('task', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>