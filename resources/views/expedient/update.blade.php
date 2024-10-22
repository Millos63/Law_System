<div class="row padding-1 p-1">
    <div class="col-md-6">
        <div class="form-group mb-2 ">
            <label for="expedient_number" class="form-label">{{ __('Numero de expediente:') }}</label>
            <input type="text" name="expedient_number" class="form-control @error('expedient_number') is-invalid @enderror" value="{{ old('expedient_number', $expedient?->expedient_number) }}" id="expedient_number" placeholder="Numero de expediente">
            {!! $errors->first('expedient_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px; padding-bottom: 57px;">
            <legend>{{ __('Información del Cliente') }}</legend>


                    <!-- FORMULARIO PARA CLIENTES -->

            <!--Estos divs son para dividir a clients en dos-->

            <div class="row">
                <div class="col-md-6">
                <!-- Primera mitad de los campos -->
                    <div class="form-group mb-2">
                        <input type="text" name="id_client" class="form-control @error('id_client') is-invalid @enderror"  value="{{ old('id_client', $expedient?->id_client)}}"  id="id_client" placeholder="Id Client" readonly hidden>
                        {!! $errors->first('id_client', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="first_name" class="form-label">{{ __('Nombre:') }}</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $client?->first_name) }}" id="first_name" placeholder="Nombre" >
                        {!! $errors->first('first_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="last_name" class="form-label">{{ __('Apellido:') }}</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $client?->last_name) }}" id="last_name" placeholder="Apellido" >
                        {!! $errors->first('last_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="direction" class="form-label">{{ __('Dirección: ') }}</label>
                        <input type="text" name="direction" class="form-control @error('direction') is-invalid @enderror" value="{{ old('direction', $client?->direction) }}" id="direction" placeholder="Dirección" >
                        {!! $errors->first('direction', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="gender" class="form-label">{{ __('Genero:') }}</label>
                        <input type="text" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender', $client?->gender) }}" id="gender" placeholder="Genero" >
                        {!! $errors->first('gender', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>

                 <!-- Segunda mitad de los campos -->
                 <div class="col-md-6">
                    

                    <div class="form-group mb-2">
                        <label for="phone_number" class="form-label">{{ __('Teléfono:') }}</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number', $client?->phone_number) }}" id="phone_number" placeholder="Teléfono" >
                        {!! $errors->first('phone_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="age" class="form-label">{{ __('Edad: ') }}</label>
                        <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ old('age', $client?->age) }}" id="age" placeholder="Edad" >
                        {!! $errors->first('age', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>
                </div>
            </div>
        </div>    
    </div>
    
    <div class="col-md-6">
    <!-- FORMULARIO PARA EXPEDIENTE -->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="id_judged" class="form-label">{{ __('Juzgado:') }}</label>
                    <select name="id_judged" class="form-control @error('id_judged') is-invalid @enderror" id="id_judged">
                        @foreach($judgeds as $judged)
                            <option value="{{$judged->id}}"{{ old('id_judged', $expedient?->id_judged)  == $judged->id ? 'selected' : ''}}>
                                {{$judged->judged_number}} {{$judged->matter->matter}}
                            </option>
                        @endforeach
                        <option value='new_judged'>{{ __('Nuevo') }}</option>
                    </select>
                    {!! $errors->first('id_judged', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="judicial_district" class="form-label">{{ __('Distrito Judicial:') }}</label>
                    <input type="text" name="judicial_district" class="form-control @error('judicial_district') is-invalid @enderror" value="{{ old('judicial_district', $expedient?->judicial_district) }}" id="judicial_district" placeholder="Distrito Judicial">
                    {!! $errors->first('judicial_district', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>


        <div style="border-radius: 2px; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px;">
            <h5>{{ __('Datos del Expediente') }}</h5>

            <div class="row" style="padding-top: 8px">
                <div class="col-md-6" >
                    <!-- Primera mitad de los campos -->

                    <div class="form-group mb-2">
                        <label for="authority" class="form-label">{{ __('Autoridad: ') }}</label>
                        <input type="text" name="authority" class="form-control @error('authority') is-invalid @enderror" value="{{ old('authority', $expedient?->authority) }}" id="authority" placeholder="Autoridad">
                        {!! $errors->first('authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="form-group mb-2">
                        <label for="id_judment" class="form-label">{{ __('Juicio:') }}</label>
                        <select name="id_judment" class="form-control @error('id_judment') is-invalid @enderror" id="id_judment">
                            @foreach($judments as $judment)
                                <option value="{{$judment->id}}"{{ old('id_judment', $expedient?->id_judment)  == $judment->id ? 'selected' : ''}}>
                                    {{$judment->judment}} 
                                </option>
                            @endforeach
                        </select>
                        {!! $errors->first('id_judment', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>

                    <div class="row" style="padding-top: 15px">
                        <h5>Información de toca</h5>
                        <div class = "col-md-3">
                            <div class="form-group mb-2">
                                <label for="touch_number" class="form-label">{{ __('No.') }}</label>
                                <input type="text" name="touch_number" class="form-control @error('touch_number') is-invalid @enderror" value="{{ old('touch_number', $expedient?->touch_number) }}" id="touch_number" placeholder="No.">
                                {!! $errors->first('touch_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                        <div class = "col-md-5" style="padding-left: 1px">
                            <div class="form-group mb-2">
                                <label for="touch_room" class="form-label">{{ __('Sala') }}</label>
                                <input type="text" name="touch_room" class="form-control @error('touch_room') is-invalid @enderror" value="{{ old('touch_room', $expedient?->touch_room) }}" id="touch_room" placeholder="Sala">
                                {!! $errors->first('touch_room', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                        <div class = "col-md-3"  style="padding-left:1px">
                            <div class="form-group mb-2" >
                                <label for="room_number" class="form-label">{{ __('No.Sala') }}</label>
                                <input type="text" name="room_number" class="form-control @error('room_number') is-invalid @enderror" value="{{ old('room_number', $expedient?->room_number) }}" id="room_number" placeholder="No.Sala">
                                {!! $errors->first('room_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                    </div>
                    
                </div>
               
                
                <div class="col-md-6">
                    <!-- Segunda mitad de los campos -->

                    <div class="form-group mb-2">
                        <label for="expedient_date" class="form-label">{{ __('Fecha de expediente: ') }}</label>
                        <input type="date" name="expedient_date" class="form-control @error('expedient_date') is-invalid @enderror" value="{{ old('expedient_date', $expedient?->expedient_date) }}" id="expedient_date" placeholder="Expedient Date">
                        {!! $errors->first('expedient_date', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>



                    <div class="form-group mb-2">
                        <label for="counter_party" class="form-label">{{ __('Contra Parte:') }}</label>
                        <input type="text" name="counter_party" class="form-control @error('counter_party') is-invalid @enderror" value="{{ old('counter_party', $expedient?->counter_party) }}" id="counter_party" placeholder="Contra Parte">
                        {!! $errors->first('counter_party', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                    </div>


                    <div class="row" style="padding-top: 15px">
                    <h5>Información de amparo</h5>
                        <div class= "col-md-4">
                            <div class="form-group mb-2">
                                <label for="protection_number" class="form-label">{{ __('Número:') }}</label>
                                <input type="text" name="protection_number" class="form-control @error('protection_number') is-invalid @enderror" value="{{ old('protection_number', $expedient?->protection_number) }}" id="protection_number" placeholder="No.">
                                {!! $errors->first('protection_number', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                        <div class= "col-md-8">
                            <div class="form-group mb-2">
                                <label for="protection_authority" class="form-label">{{ __('Autoridad:') }}</label>
                                <input type="text" name="protection_authority" class="form-control @error('protection_authority') is-invalid @enderror" value="{{ old('protection_authority', $expedient?->protection_authority) }}" id="protection_authority" placeholder="Autoridad">
                                {!! $errors->first('protection_authority', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                            </div>
                        </div>
                    </div> 

                   

                </div>
                <div class="form-group mb-1" style="padding-top:15px">
                    <label for="expedient_link" class="form-label">{{ __('Link de Expediente: ') }}</label>
                    <input type="text" name="expedient_link" class="form-control @error('expedient_link') is-invalid @enderror" value="{{ old('expedient_link', $expedient?->expedient_link) }}" id="expedient_link" placeholder="Link">
                    {!! $errors->first('expedient_link', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- SECCIÓN DE PROMOCIONES Y ACUERDOS -->
        <h5 class="section_title">{{ __('Promociones y Acuerdos') }}</h5>    
        <div class="promotion_container">
            <div id="promotions">

                <!--Para recorrer todas nuestras promociones y acuerdos-->
                @foreach($expedient->promotionsAccords as $index => $promotion)
                <div class="promotion mb-4">
                    <div class="row" style="border-top: 1px solid black; padding-top: 30px">
                        <!-- División para promociones -->
                        <div class="col-md-6">
                        
                        <div class="form-group mb-2">
                                <label for="promotion_file_{{ $index }}" class="form-label">{{ __('Archivo de Promoción:') }}</label>
                                <input type="file" name="promotions[{{ $index }}][promotion_file]" class="form-control" id="promotion_file_{{ $index }}">
                                @if($promotion->promotion_file)
                                    <!--Para Mostrar nuestros archivos PDF, si es PDF se muestra, si es otro archivo solo se muestra el link de descarga-->                                    
                                    @php 
                                        $extension = strtolower(pathinfo($promotion->promotion_file, PATHINFO_EXTENSION));
                                    @endphp

                                    @if($extension === 'pdf' || 'jpg' || 'png')
                                    <div class="mb-2">
                                        <iframe src="{{Storage::url($promotion->promotion_file) }}" width="100%" height="250PX"></iframe>
                                    </div>
                                     <!-- Mostrar el enlace de descarga debajo del iframe -->
                                    <div class="mb-2">
                                        <a href="{{ Storage::url($promotion->promotion_file) }}" download>Descargar archivo</a>
                                    </div>
                                    @else
                                        <!--No se mostrara el IFRAME-->
                                        <div class="mb-2">
                                            <a href="{{Storage::url($promotion->promotion_file)}}" download>Descargar archivo</a>
                                        </div>
                                    @endif
                                    <a href="{{ Storage::url($promotion->promotion_file) }}" target="_blank">Ver archivo</a>
                                @endif
                            </div>
                            
                            <div class="form-group mb-2">
                                <label for="promotion_date_{{ $index }}" class="form-label">{{ __('Fecha de Promoción:') }}</label>
                                <input type="date" name="promotions[{{ $index }}][promotion_date]" class="form-control" id="promotion_date_{{ $index }}" value="{{ old('promotions.' . $index . '.promotion_date', $promotion->promotion_date ? $promotion->promotion_date->format('Y-m-d') : ''  ) }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="promotion_description_{{ $index }}" class="form-label">{{ __('Descripción de la Promoción:') }}</label>
                                <input type="text" name="promotions[{{ $index }}][promotion_description]" class="form-control" id="promotion_description_{{ $index }}" placeholder="Descripción" value="{{ old('promotions.' . $index . '.promotion_description', $promotion->promotion_description) }}">
                            </div>
                        </div>
                        <!-- Sección de acuerdos -->
                        
                        
                        
                        
                        
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="accord_file_{{ $index }}" class="form-label">{{ __('Archivo de Acuerdo:') }}</label>
                                <input type="file" name="promotions[{{ $index }}][accord_file]" class="form-control" id="accord_file_{{ $index }}">
                                @if($promotion->accord_file)
                                    <!--Para Mostrar nuestros archivos PDF, si es PDF se muestra, si es otro archivo solo se muestra el link de descarga-->                                    
                                    @php 
                                        $extension = strtolower(pathinfo($promotion->accord_file, PATHINFO_EXTENSION));
                                    @endphp

                                    @if($extension === 'pdf' || 'jpg' || 'png')
                                    <div class="mb-2">
                                        <iframe src="{{Storage::url($promotion->accord_file) }}" width="100%" height="250px"></iframe>
                                    </div>

                                    <!-- Mostrar el enlace de descarga abajo del Iframe -->
                                     <div class="mb-2">
                                        <a href="{{Storage::url($promotion->accord_file) }}" download>Descargar Archivo</a>

                                     </div>
                                    @else
                                        <!--No se mostrara el IFRAME-->
                                        <div class="mb-2">
                                            <a href="{{Storage::url($promotion->promotion_file)}}" download>Descargar archivo</a>
                                        </div>
                                    @endif
                                    <a href="{{ Storage::url($promotion->accord_file) }}" target="_blank">Ver archivo</a>
                                @endif
                            </div>
                           
                           
                           
                           
                           
                           
                            <div class="form-group mb-2">
                                <label for="accord_date_{{ $index }}" class="form-label">{{ __('Fecha de Acuerdo:') }}</label>
                                <input type="date" name="promotions[{{ $index }}][accord_date]" class="form-control" id="accord_date_{{ $index }}" value="{{ old('promotions.' . $index . '.accord_date', $promotion->accord_date  ? $promotion->accord_date->format('Y-m-d') : '') }}">
                            </div>
                            <div class="form-group mb-2">
                                <label for="accord_description_{{ $index }}" class="form-label">{{ __('Descripción del Acuerdo:') }}</label>
                                <input type="text" name="promotions[{{ $index }}][accord_description]" class="form-control" id="accord_description_{{ $index }}" placeholder="Descripción" value="{{ old('promotions.' . $index . '.accord_description', $promotion->accord_description) }}">
                            </div>
                        </div>
                    </div>
                    <!-- Campo oculto para el ID de la promoción -->
                    <input type="hidden" name="promotions[{{ $index }}][id]" value="{{ $promotion->id }}">
                </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary mt-2" id="addPromotion">{{ __('Agregar Promoción') }}</button>
        </div>
    </div>

    <div class="col-md-6">
        <!-- SECCIÓN DE OTROS ARCHIVOS -->
        <h5 class="section_title">{{ __('Otros Archivos') }}</h5>
        <div class="files_container">    
            <div id="files">
                <!--Para recorrer nuestros archivos existentes-->
                @foreach($expedient->expedientFiles as $index => $file)
                    <div id="file" style="border-top: 1px solid black; padding-top: 30px">
                        <div class="form-group mb-2">
                            <label for="file_{{ $index }}" class="form-label">{{ __('Archivo:') }}</label>
                            <input type="file" name="files[{{ $index }}][file]" class="form-control" id="file_{{ $index }}">
                            @if($file->file)
                                @php
                                    $extension = strtolower(pathinfo($file->file, PATHINFO_EXTENSION));
                                @endphp

                                @if(in_array($extension, ['pdf', 'jpg', 'jpeg', 'png']))
                                    <div class="mb-2">
                                        <iframe src="{{ Storage::url($file->file) }}" width="100%" height="250px"></iframe>
                                    </div>
                                    <div class="mb-2">
                                        <a href="{{ Storage::url($file->file) }}" download>Descargar archivo</a>
                                    </div>
                                @else
                                    <div class="mb-2">
                                        <a href="{{ Storage::url($file->file) }}" download>Descargar archivo</a>
                                    </div>
                                @endif
                            @endif
                        </div>
                        <div class="form-group mb-2">
                            <label for="file_date_{{ $index }}" class="form-label">{{ __('Fecha del Archivo:') }}</label>
                            <input type="date" name="files[{{ $index }}][file_date]" class="form-control" id="file_date_{{ $index }}" value="{{ old('files.' . $index . '.file_date', $file->file_date ? $file->file_date->format('Y-m-d') : '') }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="description_{{ $index }}" class="form-label">{{ __('Descripción:') }}</label>
                            <input type="text" name="files[{{ $index }}][description]" class="form-control" id="description_{{ $index }}" placeholder="Descripción" value="{{ old('files.' . $index . '.description', $file->description) }}">
                        </div>
                        <!-- Campo oculto para el ID del archivo -->
                        <input type="hidden" name="files[{{ $index }}][id]" value="{{ $file->id }}">
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary mt-2" id="addFile">{{ __('Agregar Archivo') }}</button>
        </div>
    </div>


    <div class="col-md-12" style="margin-top:20px">
    <!-- SECCIÓN DE OBSERVACIONES -->
        <div class="observations_container">
            <h5>{{ __('Observaciones') }}</h5>
            <div id="observations">
                <!-- Iterar sobre las observaciones existentes -->
                @foreach($expedient->observations as $index => $observation)
                    <div id="observation" class="row" style="border-top: 1px solid black; padding-top: 20px;">
                        <div class="form-group col-md-3 mb-2">
                            <label for="observation_date_{{ $index }}" class="form-label">{{ __('Fecha:') }}</label>
                            <input type="date" name="observations[{{ $index }}][observation_date]" class="form-control" id="observation_date_{{ $index }}" value="{{ old('observations.' . $index . '.observation_date', $observation->observation_date ? $observation->observation_date->format('Y-m-d') : '') }}">
                        </div>

                        <div class="form-group col-md-3 mb-2">
                            <label for="observation_{{ $index }}" class="form-label">{{ __('Observación:') }}</label>
                            <input type="text" name="observations[{{ $index }}][observation]" class="form-control" id="observation_{{ $index }}" value="{{ old('observations.' . $index . '.observation', $observation->observation) }}">
                        </div>

                        <div class="form-group col-md-3 mb-2">
                            <label for="instruction_{{ $index }}" class="form-label">{{ __('Instrucciones:') }}</label>
                            <input type="text" name="observations[{{ $index }}][instruction]" class="form-control" id="instruction_{{ $index }}" value="{{ old('observations.' . $index . '.instruction', $observation->instruction) }}">
                        </div>

                        <div class="form-group col-md-3 mb-2">
                            <label for="id_user_{{ $index }}" class="form-label">{{ __('Creado por:') }}</label>
                            <input type="text" name="observations[{{ $index }}][id_user]" class="form-control" id="id_user_{{ $index }}" value="{{ $observation->user->name }}" readonly onmousedown="return false;">
                        </div>
                        <!-- Campo oculto para el ID de la observación -->
                        <input type="hidden" name="observations[{{ $index }}][id]" value="{{ $observation->id }}">
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary mt-2" id="addObservation">{{ __('Agregar Observación') }}</button>
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

<script>
    // Script para bloquear los campos si ya existe un cliente 
    /* 
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
    */

    //Script para agregar las promocoines que sean necesarias.

    document.getElementById('addPromotion').addEventListener('click', function() {
        let promotionsDiv = document.getElementById('promotions');
        let index = promotionsDiv.children.length;
        let newPromotionDiv = document.createElement('div');
        newPromotionDiv.classList.add('promotion', 'mb-4');
        newPromotionDiv.innerHTML = `
         <div class="row" style=" border-top: 1px solid black; padding-top: 10px">
            <div class="col-md-6" >
                <div class="form-group mb-2">
                    <label for="promotion_file_${index}" class="form-label">Archivo de Promoción:</label>
                    <input type="file" name="promotions[${index}][promotion_file]" class="form-control" id="promotion_file_${index}">
                </div>
                <div class="form-group mb-2">
                    <label for="promotion_date_${index}" class="form-label">Fecha de Promoción:</label>
                    <input type="date" name="promotions[${index}][promotion_date]" class="form-control" id="promotion_date_${index}">
                </div>
                <div class="form-group mb-2">
                    <label for="promotion_description_${index}" class="form-label">Descripción de la Promoción:</label>
                    <input type="text" name="promotions[${index}][promotion_description]" class="form-control" id="promotion_description_${index}" placeholder="Descripción">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="accord_file_${index}" class="form-label">Archivo de Acuerdo:</label>
                    <input type="file" name="promotions[${index}][accord_file]" class="form-control" id="accord_file_${index}">
                </div>
                <div class="form-group mb-2">
                    <label for="accord_date_${index}" class="form-label">Fecha de Acuerdo:</label>
                    <input type="date" name="promotions[${index}][accord_date]" class="form-control" id="accord_date_${index}">
                </div>
                <div class="form-group mb-2">
                    <label for="accord_description_${index}" class="form-label">Descripción del Acuerdo:</label>
                    <input type="text" name="promotions[${index}][accord_description]" class="form-control" id="accord_description_${index}" placeholder="Descripción">
                </div>
            </div>
        </div>
    `;
    promotionsDiv.appendChild(newPromotionDiv);
});


    document.getElementById('addFile').addEventListener('click', function(){
        let filesDiv = document.getElementById('files');
        let indexFile = filesDiv.children.lenght;
        let newFileDiv = document.createElement('div');
        newFileDiv.classList.add('file', 'mb-4');
        newFileDiv.innerHTML = `
        <div style="border-top: 1px solid black; padding-top: 10px">
            <div class="form-group mb-4">
                <label for="file_${indexFile}" class="form-label">{{ __('Archivo:') }}</label>
                <input type="file" name="files[${indexFile}][file]" class="form-control" id="file_${indexFile}">
            </div>
            <div class="form-group mb-4">
                <label for="file_date_${indexFile}" class="form-label">{{ __('Fecha:') }}</label>
                <input type="date" name="files[${indexFile}][file_date]" class="form-control" id="file_date_${indexFile}">
            </div>
            <div class="form-group mb-4">
                <label for="description_${indexFile}" class="form-label">{{ __('Descripción:') }}</label>
                <input type="text" name="files[${indexFile}][description]" class="form-control" id="description_${indexFile}">
            </div>
        </div>
        `;
        filesDiv.appendChild(newFileDiv);

    })

    document.getElementById('addObservation').addEventListener('click', function(){
        let observationsDiv = document.getElementById('observations');
        let indexObservation = observationsDiv.children.length;
        let newObservationDiv = document.createElement('div');
        newObservationDiv.classList.add('observation', 'row', 'mb-4');
        newObservationDiv.innerHTML = `
        <div style="border-top: 1px solid black; padding-top: 10px" class="row">
            <div class="form-group col-md-3 mb-2">
                <label for="observation_date_${indexObservation}" class="form-label">{{ __('Fecha:') }}</label>
                <input type="date" name="observations[${indexObservation}][observation_date]" class="form-control" id="observation_date_${indexObservation}"  value="{{ \Carbon\Carbon::now()->toDateString() }}">
            </div>
            <div class="form-group col-md-3 mb-2">
                <label for="observation_${indexObservation}" class="form-label">{{ __('Observación:') }}</label>
                <input type="text" name="observations[${indexObservation}][observation]" class="form-control" id="observation_${indexObservation}">
            </div>

            <div class="form-group col-md-3 mb-2">
                <label for="instruction_${indexObservation}" class="form-label">{{ __('Instrucciónes: ') }}</label>
                <input type="text" name="observations[${indexObservation}][instruction]" class="form-control" id="instruction_${indexObservation}">
            </div>
            <div class="form-group col-md-3 mb-2">
                <label for="id_user_${indexObservation}" class="form-label">{{ __('Creado por:') }}</label>
                <input type="text" name="observations[${indexObservation}][id_user]" class="form-control" id="id_user_${indexObservation}" value="{{auth()->user()->name}}" readonly onmousedown="return false;">
            </div>
        </div>
        `;
        observationsDiv.appendChild(newObservationDiv);
    })
</script>
