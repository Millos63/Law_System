<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="judged_number" class="form-label">{{ __('Número de Juzgado') }}</label>
            <input type="text" name="judged_number" class="form-control @error('judged_number') is-invalid @enderror" value="{{ old('judged_number', $judged?->judged_number) }}" id="judged_number" placeholder="Número de Juzgado">
            {!! $errors->first('judged_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2">
            <label for="id_matter" class="form-label">{{ __('Materia:') }}</label>
            <select name="id_matter" class="form-control @error('id_matter') is-invalid @enderror" id="id_matter">
                @foreach($matters as $matter)
                    <option value="{{$matter->id}}"{{ old('id_matter', $judged?->id_matter)  == $matter->id ? 'selected' : ''}}>
                        {{$matter->matter}}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_judged', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>