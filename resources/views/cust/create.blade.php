@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active"><span>Create</span></li>
                            </ol>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <meta name="_token" content="{{ csrf_token() }}" /> 
                    {{ method_field('post') }}
						{!! Form::open(['method' => 'POST','route' => ['storecust']])  !!}
						{{ csrf_field() }}
						@include('cust.form')
						{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection