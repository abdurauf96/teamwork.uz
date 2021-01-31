@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create New BlokService</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/blok-service') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/blok-service', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.blok-service.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
