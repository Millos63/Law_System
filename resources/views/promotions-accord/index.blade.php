@extends('layouts.app')

@section('template_title')
    Promotions Accords
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Promotions Accords') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('promotions-accords.create', ['id_expedient' => $id_expedient]) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Promotion File</th>
									<th >Promotion Date</th>
									<th >Promotion Description</th>
									<th >Accord File</th>
									<th >Accord Date</th>
									<th >Accord Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promotionsAccords as $promotionsAccord)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $promotionsAccord->id_expedient }}</td>
										<td >{{ $promotionsAccord->promotion_file }}</td>
										<td >{{ $promotionsAccord->promotion_date }}</td>
										<td >{{ $promotionsAccord->promotion_description }}</td>
										<td >{{ $promotionsAccord->accord_file }}</td>
										<td >{{ $promotionsAccord->accord_date }}</td>
										<td >{{ $promotionsAccord->accord_description }}</td>

                                            <td>
                                                <form action="{{ route('promotions-accords.destroy', $promotionsAccord->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('promotions-accords.show', $promotionsAccord->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('promotions-accords.edit', $promotionsAccord->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $promotionsAccords->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
