@extends('layouts.app')

@section('template_title')
    Expedients
@endsection

@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expedientes') }}
                            </span>
                            
                            
                            <!-- Formulario de Búsqueda -->
                            <form action="{{route('expedients.index') }}" method="GET" class="form-inline">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Buscar..." value="{{ request('search') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit">Buscar</button>

                                    </div>
                                </div>
                            </form>

                             <div class="float-right">
                                <a href="{{ route('expedients.create') }}" class="btn btn-sm float-right" style="background-color: #4caf50; color: #ffffff; border: none;" data-placement="left">
                                    {{ __('Crear Expediente') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th></th>
                                        
									<th class="expedient_number" > No. Expediente</th>
									<th >Cliente</th>
                                    <th >Contraparte</th>
                                    <th >Juicio</th>
                                    <th >Juzgado</th>
                                    <th >Autoridad</th>
                                    <th >Link</th>

                                    <th >Fecha</th>
								
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expedients as $expedient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $expedient->expedient_number }}</td>
                                        <td >{{ $expedient->client->first_name }} {{ $expedient->client->last_name }}</td>
										<td >{{ $expedient->counter_party }}</td>
										<td >{{ $expedient->judment->judment }}</td>
										<td >{{ $expedient->judged->judged_number}}</td>
										<td >{{ $expedient->authority }}</td>

										<td>
                                            <a href="{{ $expedient->expedient_link }}">
                                                {{Str::limit($expedient->expedient_link, 35)}}
                                            </a>
                                            
                                        </td>


                                        <td >{{ $expedient->expedient_date }}</td>


                                            <td>
                                            <form action="{{ route('expedients.destroy', $expedient->id) }}" method="POST">
                                                <!--<a class="btn btn-sm btn-primary" href="{{ route('expedients.show', $expedient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>-->
                                                <a class="btn btn-sm" href="{{ route('expedients.edit', $expedient->id) }}" style="background-color: #B8860B; color: #ffffff; border: none;">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Ver') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm" style="background-color: #DB530F; color: #ffffff; border: none;" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $expedients->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
