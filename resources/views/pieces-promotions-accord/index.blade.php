@extends('layouts.app')

@section('template_title')
    Pieces Promotions Accords
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pieces Promotions Accords') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pieces-promotions-accords.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    @foreach ($piecesPromotionsAccords as $piecesPromotionsAccord)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $piecesPromotionsAccord->id_piece }}</td>
										<td >{{ $piecesPromotionsAccord->promotion_file }}</td>
										<td >{{ $piecesPromotionsAccord->promotion_date }}</td>
										<td >{{ $piecesPromotionsAccord->promotion_description }}</td>
										<td >{{ $piecesPromotionsAccord->accord_file }}</td>
										<td >{{ $piecesPromotionsAccord->accord_date }}</td>
										<td >{{ $piecesPromotionsAccord->accord_description }}</td>

                                            <td>
                                                <form action="{{ route('pieces-promotions-accords.destroy', $piecesPromotionsAccord->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pieces-promotions-accords.show', $piecesPromotionsAccord->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pieces-promotions-accords.edit', $piecesPromotionsAccord->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $piecesPromotionsAccords->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
