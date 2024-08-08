@extends('layouts.app')

@section('template_title')
    Pieces Files
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pieces Files') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pieces-files.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Id Piece</th>
									<th >Start File</th>
									<th >Start Description</th>
									<th >Start Date</th>
									<th >Finish File</th>
									<th >Finish Description</th>
									<th >Finish Date</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($piecesFiles as $piecesFile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $piecesFile->id_piece }}</td>
										<td >{{ $piecesFile->start_file }}</td>
										<td >{{ $piecesFile->start_description }}</td>
										<td >{{ $piecesFile->start_date }}</td>
										<td >{{ $piecesFile->finish_file }}</td>
										<td >{{ $piecesFile->finish_description }}</td>
										<td >{{ $piecesFile->finish_date }}</td>

                                            <td>
                                                <form action="{{ route('pieces-files.destroy', $piecesFile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pieces-files.show', $piecesFile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pieces-files.edit', $piecesFile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $piecesFiles->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
