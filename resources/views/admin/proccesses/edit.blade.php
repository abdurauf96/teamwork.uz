@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Proccess #{{ $proccess->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/proccesses') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($proccess, [
                            'method' => 'PATCH',
                            'url' => ['/admin/proccesses', $proccess->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.proccesses.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
