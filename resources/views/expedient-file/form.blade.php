<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_expedient" class="form-label">{{ __('Id Expedient') }}</label>
            <input type="text" name="id_expedient" class="form-control @error('id_expedient') is-invalid @enderror" value="{{ old('id_expedient', $expedientFile?->id_expedient) }}" id="id_expedient" placeholder="Id Expedient">
            {!! $errors->first('id_expedient', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="file" class="form-label">{{ __('File') }}</label>
            <input type="text" name="file" class="form-control @error('file') is-invalid @enderror" value="{{ old('file', $expedientFile?->file) }}" id="file" placeholder="File">
            {!! $errors->first('file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="file_date" class="form-label">{{ __('File Date') }}</label>
            <input type="text" name="file_date" class="form-control @error('file_date') is-invalid @enderror" value="{{ old('file_date', $expedientFile?->file_date) }}" id="file_date" placeholder="File Date">
            {!! $errors->first('file_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $expedientFile?->description) }}" id="description" placeholder="Description">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>