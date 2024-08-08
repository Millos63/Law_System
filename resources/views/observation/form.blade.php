<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_expedient" class="form-label">{{ __('Id Expedient') }}</label>
            <input type="text" name="id_expedient" class="form-control @error('id_expedient') is-invalid @enderror" value="{{ old('id_expedient', $observation?->id_expedient) }}" id="id_expedient" placeholder="Id Expedient">
            {!! $errors->first('id_expedient', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label">{{ __('Id User') }}</label>
            <input type="text" name="id_user" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user', $observation?->id_user) }}" id="id_user" placeholder="Id User">
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observation" class="form-label">{{ __('Observation') }}</label>
            <input type="text" name="observation" class="form-control @error('observation') is-invalid @enderror" value="{{ old('observation', $observation?->observation) }}" id="observation" placeholder="Observation">
            {!! $errors->first('observation', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instruction" class="form-label">{{ __('Instruction') }}</label>
            <input type="text" name="instruction" class="form-control @error('instruction') is-invalid @enderror" value="{{ old('instruction', $observation?->instruction) }}" id="instruction" placeholder="Instruction">
            {!! $errors->first('instruction', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observation_date" class="form-label">{{ __('Observation Date') }}</label>
            <input type="text" name="observation_date" class="form-control @error('observation_date') is-invalid @enderror" value="{{ old('observation_date', $observation?->observation_date) }}" id="observation_date" placeholder="Observation Date">
            {!! $errors->first('observation_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>