@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit {{$cust->name}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <ol class="breadcrumb breadcrumb-arrow">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="active"><span>Edit</span></li>
                            </ol>
                        </div>
                    </div>
                    
                    {!! Form::model($cust, ['files'=> 'true','method' => 'POST','route' => ['custupdate', $cust->id], 'role' => 'form', 'data-toggle' => 'validator', 'novalidate' => 'true', 'name' => 'contentform', 'id' => 'demoForm', 'enctype' => 'multipart/form-data'])  !!}
                    @csrf
                        @include('cust.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection