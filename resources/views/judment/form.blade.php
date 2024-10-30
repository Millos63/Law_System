<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="judment" class="form-label">{{ __('Juicio') }}</label>
            <input type="text" name="judment" class="form-control @error('judment') is-invalid @enderror" value="{{ old('judment', $judment?->judment) }}" id="judment" placeholder="Juicio">
            {!! $errors->first('judment', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>