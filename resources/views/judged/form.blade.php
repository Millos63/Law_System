<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="judged_number" class="form-label">{{ __('Judged Number') }}</label>
            <input type="text" name="judged_number" class="form-control @error('judged_number') is-invalid @enderror" value="{{ old('judged_number', $judged?->judged_number) }}" id="judged_number" placeholder="Judged Number">
            {!! $errors->first('judged_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="matter" class="form-label">{{ __('Matter') }}</label>
            <input type="text" name="matter" class="form-control @error('matter') is-invalid @enderror" value="{{ old('matter', $judged?->matter) }}" id="matter" placeholder="Matter">
            {!! $errors->first('matter', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>