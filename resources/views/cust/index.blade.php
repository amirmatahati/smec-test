@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flash-message">
					    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
						    @if(Session::has('alert-' . $msg))
							<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
							  @endif
							@endforeach
                          </div>
                    <div class="form-group">
                        <a href="{{ route('createcust') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Handphone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($cust))
                            @foreach($cust as $cus)
                            <tr>
                                <td>{{$cus->name}}</td>
                                <td>{{$cus->no_handphone}}</td>
                                <td>{{$cus->email}}</td>
                                <td>
                                        <a href="{{route('custedit', $cus->id) }}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                                        <a onclick="return confirm('Are you sure?')" href="{{route('custdelete', $cus->id) }}" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td>No found data</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $cust->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection