@extends('layouts.app')

@section('template_title')
    Observations
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Observations') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('observations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
									<th >Id Expedient</th>
									<th >Id User</th>
									<th >Observation</th>
									<th >Instruction</th>
									<th >Observation Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($observations as $observation)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $observation->id_expedient }}</td>
										<td >{{ $observation->id_user }}</td>
										<td >{{ $observation->observation }}</td>
										<td >{{ $observation->instruction }}</td>
										<td >{{ $observation->observation_date }}</td>

                                            <td>
                                                <form action="{{ route('observations.destroy', $observation->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('observations.show', $observation->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('observations.edit', $observation->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $observations->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
