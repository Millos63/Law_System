<div class="row padding-1 p-1">
    <div class="col-md-6">
        <!-- FORMULARIO PARA CLIENTES -->
        <div class="form-group mb-2">
            <label for="expedient_number" class="form-label">{{ __('Numero de expediente') }}</label>
            <input type="text" name="expedient_number" class="form-control @error('expedient_number') is-invalid @enderror" value="{{ old('expedient_number', $expedient?->expedient_number) }}" id="expedient_number" placeholder="Expedient Number">
            {!! $errors->first('expedient_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px;">
            <h5>{{ __('Información del Cliente') }}</h5>

            <!--Estos divs son para dividir a clients en dos-->

            <div class="row">
                <div class="col-md-6">
                <!-- Primera mitad de los campos -->
                    <div class="form-group mb-2">
                        <label for="id_client" class="form-label">{{ __('id_client') }}</label>
                        <select name="id_client" class="form-control @error('id_client') is-invalid @enderror" id="id_client" onchange="toggleClientFields()">
                            @foreach($clients as $client)
                                <option value="{{$client->id}}"{{ old('id_client', $expedient?->id_client) == $client->id ? 'selected' : ''}}>
                                    {{$client->first_name}} {{$client->last_name}}
                                </option>
                            @endforeach
                            <option value='new_client'>{{ __('Crear nuevo cliente') }}</option>
                        </select>
                        {!! $errors->first('id_client', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $client?->first_name) }}" id="first_name" placeholder="First Name" readonly>
                        {!! $errors->first('first_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $client?->last_name) }}" id="last_name" placeholder="Last Name" readonly>
                        {!! $errors->first('last_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="direction" class="form-label">{{ __('Direction') }}</label>
                        <input type="text" name="direction" class="form-control @error('direction') is-invalid @enderror" value="{{ old('direction', $client?->direction) }}" id="direction" placeholder="Direction" readonly>
                        {!! $errors->first('direction', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>

                 <!-- Segunda mitad de los campos -->
                 <div class="col-md-6">
                    <div class="form-group mb-2">
                        <label for="gender" class="form-label">{{ __('Gender') }}</label>
                        <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender', $client?->gender) }}" id="gender" placeholder="Gender" readonly>
                        {!! $errors->first('gender', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number', $client?->phone_number) }}" id="phone_number" placeholder="Phone Number" readonly>
                        {!! $errors->first('phone_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="age" class="form-label">{{ __('Age') }}</label>
                        <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $client?->age) }}" id="age" placeholder="Age" readonly>
                        {!! $errors->first('age', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
        </div>    
    </div>
    
    <div class="col-md-6">
    <!-- FORMULARIO PARA EXPEDIENTE -->
     
        <div class="form-group mb-2">
            <label for="id_judged" class="form-label">{{ __('Id Judged') }}</label>
            <input type="text" name="id_judged" class="form-control @error('id_judged') is-invalid @enderror" value="{{ old('id_judged', $expedient?->id_judged) }}" id="id_judged" placeholder="Id Judged">
            {!! $errors->first('id_judged', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px;">
            <h5>{{ __('Datos del Expediente') }}</h5>

            <div class="row">
                <div class="col-md-6">
                    <!-- Primera mitad de los campos -->


                    <div class="form-group mb-2">
                        <label for="expedient_date" class="form-label">{{ __('Expedient Date') }}</label>
                        <input type="text" name="expedient_date" class="form-control @error('expedient_date') is-invalid @enderror" value="{{ old('expedient_date', $expedient?->expedient_date) }}" id="expedient_date" placeholder="Expedient Date">
                        {!! $errors->first('expedient_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="authority" class="form-label">{{ __('Authority') }}</label>
                        <input type="text" name="authority" class="form-control @error('authority') is-invalid @enderror" value="{{ old('authority', $expedient?->authority) }}" id="authority" placeholder="Authority">
                        {!! $errors->first('authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>


                    <div class="form-group mb-2">
                        <label for="id_judment" class="form-label">{{ __('Id Judment') }}</label>
                        <input type="text" name="id_judment" class="form-control @error('id_judment') is-invalid @enderror" value="{{ old('id_judment', $expedient?->id_judment) }}" id="id_judment" placeholder="Id Judment">
                        {!! $errors->first('id_judment', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Segunda mitad de los campos -->
                    <div class="form-group mb-2">
                        <label for="expedient_link" class="form-label">{{ __('Expedient Link') }}</label>
                        <input type="text" name="expedient_link" class="form-control @error('expedient_link') is-invalid @enderror" value="{{ old('expedient_link', $expedient?->expedient_link) }}" id="expedient_link" placeholder="Expedient Link">
                        {!! $errors->first('expedient_link', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="counter_party" class="form-label">{{ __('Counter Party') }}</label>
                        <input type="text" name="counter_party" class="form-control @error('counter_party') is-invalid @enderror" value="{{ old('counter_party', $expedient?->counter_party) }}" id="counter_party" placeholder="Counter Party">
                        {!! $errors->first('counter_party', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="judicial_district" class="form-label">{{ __('Judicial District') }}</label>
                        <input type="text" name="judicial_district" class="form-control @error('judicial_district') is-invalid @enderror" value="{{ old('judicial_district', $expedient?->judicial_district) }}" id="judicial_district" placeholder="Judicial District">
                        {!! $errors->first('judicial_district', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="touch_number" class="form-label">{{ __('Touch Number') }}</label>
                        <input type="text" name="touch_number" class="form-control @error('touch_number') is-invalid @enderror" value="{{ old('touch_number', $expedient?->touch_number) }}" id="touch_number" placeholder="Touch Number">
                        {!! $errors->first('touch_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="touch_room" class="form-label">{{ __('Touch Room') }}</label>
                        <input type="text" name="touch_room" class="form-control @error('touch_room') is-invalid @enderror" value="{{ old('touch_room', $expedient?->touch_room) }}" id="touch_room" placeholder="Touch Room">
                        {!! $errors->first('touch_room', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="room_number" class="form-label">{{ __('Room Number') }}</label>
                        <input type="text" name="room_number" class="form-control @error('room_number') is-invalid @enderror" value="{{ old('room_number', $expedient?->room_number) }}" id="room_number" placeholder="Room Number">
                        {!! $errors->first('room_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="protection_number" class="form-label">{{ __('Protection Number') }}</label>
                        <input type="text" name="protection_number" class="form-control @error('protection_number') is-invalid @enderror" value="{{ old('protection_number', $expedient?->protection_number) }}" id="protection_number" placeholder="Protection Number">
                        {!! $errors->first('protection_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="protection_authority" class="form-label">{{ __('Protection Authority') }}</label>
                        <input type="text" name="protection_authority" class="form-control @error('protection_authority') is-invalid @enderror" value="{{ old('protection_authority', $expedient?->protection_authority) }}" id="protection_authority" placeholder="Protection Authority">
                        {!! $errors->first('protection_authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- SECCIÓN DE PROMOCIONES Y ACUERDOS -->
        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px;">
            <h5>{{ __('Promociones y Acuerdos') }}</h5>
            <button class="btn btn-success">{{ __('Ver promociones y acuerdos') }}</button>
        </div>
    </div>

    <div class="col-md-6">
        <!-- SECCIÓN DE OTROS ARCHIVOS -->
        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px;">
            <h5>{{ __('Otros Archivos') }}</h5>
            <button class="btn btn-success">{{ __('Archivos') }}</button>
        </div>
    </div>

    <div class="col-md-12 mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

<!-- Estilos adicionales -->
<style>
    .opaque {
        opacity: 0.2;
        pointer-events: none;
    }
</style>

<!-- Script para bloquear los campos si ya existe un cliente -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function toggleClientFields() {
            var clientSelect = document.getElementById('id_client');
            var fields = ['first_name', 'last_name', 'direction', 'gender', 'phone_number', 'age'];

            if (clientSelect.value === 'new_client') {
                fields.forEach(function(field) {
                    document.getElementById(field).removeAttribute('readonly');
                    document.getElementById(field).classList.remove('opaque');
                });
            } else {
                fields.forEach(function(field) {
                    document.getElementById(field).setAttribute('readonly', 'readonly');
                    document.getElementById(field).classList.add('opaque');
                });
            }
        }

        document.getElementById('id_client').onchange = toggleClientFields;
        toggleClientFields();
    });
</script>
