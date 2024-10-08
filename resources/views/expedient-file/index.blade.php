@extends('layouts.app')

@section('template_title')
    Expedient Files
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expedient Files') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('expedient-files.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >File</th>
									<th >File Date</th>
									<th >Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expedientFiles as $expedientFile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $expedientFile->id_expedient }}</td>
										<td >{{ $expedientFile->file }}</td>
										<td >{{ $expedientFile->file_date }}</td>
										<td >{{ $expedientFile->description }}</td>

                                            <td>
                                                <form action="{{ route('expedient-files.destroy', $expedientFile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('expedient-files.show', $expedientFile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('expedient-files.edit', $expedientFile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $expedientFiles->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
