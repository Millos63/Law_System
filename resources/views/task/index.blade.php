@extends('layouts.app')

@section('template_title')
    Tasks
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tareas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Tarea') }}
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
                                        
									<th >Responsable</th>
									<th >Fecha Inicio</th>
									<th >Fecha Final</th>
									<th >Tarea</th>

                                    <!--Agregar sección para marcar la tarea como finalizada-->
                                    <th>Estatus</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                        
                                        <td >{{ $task->user->name }} </td>
										<td >{{ $task->start_date }}</td>
										<td >{{ $task->finish_date }}</td>
										<td >{{ $task->task }}</td>
                                        <td >{{ $task->task_state }}</td>

                                            <td>
                                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('tasks.show', $task->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('tasks.edit', $task->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Ver') }}</a>
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
                {!! $tasks->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
