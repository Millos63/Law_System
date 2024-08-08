@extends('layouts.app')

@section('template_title')
    Expedients
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('ExpedientsALL') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('expedients-all.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Expedient Number</th>
									<th >Expedient Date</th>
									<th >Id Client</th>
									<th >Authority</th>
									<th >Id Judged</th>
									<th >Id Judment</th>
									<th >Expedient Link</th>
									<th >Counter Party</th>
									<th >Judicial District</th>
									<th >Touch Number</th>
									<th >Touch Room</th>
									<th >Room Number</th>
									<th >Protection Number</th>
									<th >Protection Authority</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expedients as $expedient)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $expedient->expedient_number }}</td>
										<td >{{ $expedient->expedient_date }}</td>
										<td >{{ $expedient->id_client }}</td>
										<td >{{ $expedient->authority }}</td>
										<td >{{ $expedient->id_judged }}</td>
										<td >{{ $expedient->id_judment }}</td>
										<td >{{ $expedient->expedient_link }}</td>
										<td >{{ $expedient->counter_party }}</td>
										<td >{{ $expedient->judicial_district }}</td>
										<td >{{ $expedient->touch_number }}</td>
										<td >{{ $expedient->touch_room }}</td>
										<td >{{ $expedient->room_number }}</td>
										<td >{{ $expedient->protection_number }}</td>
										<td >{{ $expedient->protection_authority }}</td>

                                            <td>
                                                <form action="{{ route('expedients.destroy', $expedient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('expedients.show', $expedient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('expedients.edit', $expedient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $expedients->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
