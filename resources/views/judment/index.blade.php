@extends('layouts.app')

@section('template_title')
    Judments
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Juicios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('judments.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Juicio') }}
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
                                        
									    <th >Juicio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($judments as $judment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $judment->judment }}</td>

                                            <td>
                                                <form action="{{ route('judments.destroy', $judment->id) }}" method="POST">
                                                    <!--<a class="btn btn-sm btn-primary " href="{{ route('judments.show', $judment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>-->
                                                    <a class="btn btn-sm btn-success" href="{{ route('judments.edit', $judment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Ver') }}</a>
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
                {!! $judments->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
