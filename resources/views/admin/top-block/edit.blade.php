@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit TopBlock #{{ $topblock->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/top-block') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($topblock, [
                            'method' => 'PATCH',
                            'url' => ['/admin/top-block', $topblock->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.top-block.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
