<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Responsable') }}</label>
            <select  name="id_user" class="form-control @error('id_user') is-invalid @enderror" id="id_user">
                @foreach($users as $user)
                    <option value="{{$user->id}}" {{old('id_user', $task?->id_user) == $user->id ? 'selected' : ''}}>
                        {{$user->name}}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_date" class="form-label">{{ __('Fecha de Inicio') }}</label>
            <input type="date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $task?->start_date) }}" id="start_date" placeholder="Start Date">
            {!! $errors->first('start_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="finish_date" class="form-label">{{ __('Fecha Final') }}</label>
            <input type="date" name="finish_date" class="form-control @error('finish_date') is-invalid @enderror" value="{{ old('finish_date', $task?->finish_date) }}" id="finish_date" placeholder="Finish Date">
            {!! $errors->first('finish_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="task" class="form-label">{{ __('Tarea') }}</label>
            <input type="text" name="task" class="form-control @error('task') is-invalid @enderror" value="{{ old('task', $task?->task) }}" id="task" placeholder="Task">
            {!! $errors->first('task', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>