@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit ServiceTechnology #{{ $servicetechnology->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/service-technologies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($servicetechnology, [
                            'method' => 'PATCH',
                            'url' => ['/admin/service-technologies', $servicetechnology->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.service-technologies.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
