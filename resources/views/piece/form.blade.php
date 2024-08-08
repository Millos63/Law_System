<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_expedient" class="form-label">{{ __('Id Expedient') }}</label>
            <input type="text" name="id_expedient" class="form-control @error('id_expedient') is-invalid @enderror" value="{{ old('id_expedient', $piece?->id_expedient) }}" id="id_expedient" placeholder="Id Expedient">
            {!! $errors->first('id_expedient', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="piece_type" class="form-label">{{ __('Piece Type') }}</label>
            <input type="text" name="piece_type" class="form-control @error('piece_type') is-invalid @enderror" value="{{ old('piece_type', $piece?->piece_type) }}" id="piece_type" placeholder="Piece Type">
            {!! $errors->first('piece_type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="piece_number" class="form-label">{{ __('Piece Number') }}</label>
            <input type="text" name="piece_number" class="form-control @error('piece_number') is-invalid @enderror" value="{{ old('piece_number', $piece?->piece_number) }}" id="piece_number" placeholder="Piece Number">
            {!! $errors->first('piece_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="review_authority" class="form-label">{{ __('Review Authority') }}</label>
            <input type="text" name="review_authority" class="form-control @error('review_authority') is-invalid @enderror" value="{{ old('review_authority', $piece?->review_authority) }}" id="review_authority" placeholder="Review Authority">
            {!! $errors->first('review_authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="review_number" class="form-label">{{ __('Review Number') }}</label>
            <input type="text" name="review_number" class="form-control @error('review_number') is-invalid @enderror" value="{{ old('review_number', $piece?->review_number) }}" id="review_number" placeholder="Review Number">
            {!! $errors->first('review_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="complaint_authority" class="form-label">{{ __('Complaint Authority') }}</label>
            <input type="text" name="complaint_authority" class="form-control @error('complaint_authority') is-invalid @enderror" value="{{ old('complaint_authority', $piece?->complaint_authority) }}" id="complaint_authority" placeholder="Complaint Authority">
            {!! $errors->first('complaint_authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="complaint_number" class="form-label">{{ __('Complaint Number') }}</label>
            <input type="text" name="complaint_number" class="form-control @error('complaint_number') is-invalid @enderror" value="{{ old('complaint_number', $piece?->complaint_number) }}" id="complaint_number" placeholder="Complaint Number">
            {!! $errors->first('complaint_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observations" class="form-label">{{ __('Observations') }}</label>
            <input type="text" name="observations" class="form-control @error('observations') is-invalid @enderror" value="{{ old('observations', $piece?->observations) }}" id="observations" placeholder="Observations">
            {!! $errors->first('observations', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>