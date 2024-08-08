<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_piece" class="form-label">{{ __('Id Piece') }}</label>
            <input type="text" name="id_piece" class="form-control @error('id_piece') is-invalid @enderror" value="{{ old('id_piece', $piecesFile?->id_piece) }}" id="id_piece" placeholder="Id Piece">
            {!! $errors->first('id_piece', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_file" class="form-label">{{ __('Start File') }}</label>
            <input type="text" name="start_file" class="form-control @error('start_file') is-invalid @enderror" value="{{ old('start_file', $piecesFile?->start_file) }}" id="start_file" placeholder="Start File">
            {!! $errors->first('start_file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_description" class="form-label">{{ __('Start Description') }}</label>
            <input type="text" name="start_description" class="form-control @error('start_description') is-invalid @enderror" value="{{ old('start_description', $piecesFile?->start_description) }}" id="start_description" placeholder="Start Description">
            {!! $errors->first('start_description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="start_date" class="form-label">{{ __('Start Date') }}</label>
            <input type="text" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date', $piecesFile?->start_date) }}" id="start_date" placeholder="Start Date">
            {!! $errors->first('start_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="finish_file" class="form-label">{{ __('Finish File') }}</label>
            <input type="text" name="finish_file" class="form-control @error('finish_file') is-invalid @enderror" value="{{ old('finish_file', $piecesFile?->finish_file) }}" id="finish_file" placeholder="Finish File">
            {!! $errors->first('finish_file', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="finish_description" class="form-label">{{ __('Finish Description') }}</label>
            <input type="text" name="finish_description" class="form-control @error('finish_description') is-invalid @enderror" value="{{ old('finish_description', $piecesFile?->finish_description) }}" id="finish_description" placeholder="Finish Description">
            {!! $errors->first('finish_description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="finish_date" class="form-label">{{ __('Finish Date') }}</label>
            <input type="text" name="finish_date" class="form-control @error('finish_date') is-invalid @enderror" value="{{ old('finish_date', $piecesFile?->finish_date) }}" id="finish_date" placeholder="Finish Date">
            {!! $errors->first('finish_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>