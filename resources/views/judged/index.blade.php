@extends('layouts.app')

@section('template_title')
    Judgeds
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Juzgados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('judgeds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Juzgado') }}
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
                                        <th>No</th>
                                        
									<th >Número de Juzgado</th>
									<th >Materia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($judgeds as $judged)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $judged->judged_number }}</td>

                                        <td >{{ $judged->matter->matter }} </td>


                                            <td>
                                                <form action="{{ route('judgeds.destroy', $judged->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('judgeds.show', $judged->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('judgeds.edit', $judged->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Ver') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $judgeds->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
