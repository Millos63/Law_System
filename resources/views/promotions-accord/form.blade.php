<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_expedient" class="form-label">{{ __('Id Expedient') }}</label>
            <input type="text" name="id_expedient" class="form-control @error('id_expedient') is-invalid @enderror" value="{{ old('id_expedient', $promotionsAccord?->id_expedient) }}" id="id_expedient" placeholder="Id Expedient">
            {!! $errors->first('id_expedient', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="promotion_file" class="form-label">{{ __('Promotion File') }}</label>
            <input type="text" name="promotion_file" class="form-control @error('promotion_file') is-invalid @enderror" value="{{ old('promotion_file', $promotionsAccord?->promotion_file) }}" id="promotion_file" placeholder="Promotion File">
            {!! $errors->first('promotion_file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="promotion_date" class="form-label">{{ __('Promotion Date') }}</label>
            <input type="text" name="promotion_date" class="form-control @error('promotion_date') is-invalid @enderror" value="{{ old('promotion_date', $promotionsAccord?->promotion_date) }}" id="promotion_date" placeholder="Promotion Date">
            {!! $errors->first('promotion_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="promotion_description" class="form-label">{{ __('Promotion Description') }}</label>
            <input type="text" name="promotion_description" class="form-control @error('promotion_description') is-invalid @enderror" value="{{ old('promotion_description', $promotionsAccord?->promotion_description) }}" id="promotion_description" placeholder="Promotion Description">
            {!! $errors->first('promotion_description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="accord_file" class="form-label">{{ __('Accord File') }}</label>
            <input type="text" name="accord_file" class="form-control @error('accord_file') is-invalid @enderror" value="{{ old('accord_file', $promotionsAccord?->accord_file) }}" id="accord_file" placeholder="Accord File">
            {!! $errors->first('accord_file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="accord_date" class="form-label">{{ __('Accord Date') }}</label>
            <input type="text" name="accord_date" class="form-control @error('accord_date') is-invalid @enderror" value="{{ old('accord_date', $promotionsAccord?->accord_date) }}" id="accord_date" placeholder="Accord Date">
            {!! $errors->first('accord_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="accord_description" class="form-label">{{ __('Accord Description') }}</label>
            <input type="text" name="accord_description" class="form-control @error('accord_description') is-invalid @enderror" value="{{ old('accord_description', $promotionsAccord?->accord_description) }}" id="accord_description" placeholder="Accord Description">
            {!! $errors->first('accord_description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>