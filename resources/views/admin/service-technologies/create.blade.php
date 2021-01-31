@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Create New ServiceTechnology</div>
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

                        {!! Form::open(['url' => '/admin/service-technologies', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.service-technologies.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#images').fileinput({
            thema: 'fa',
            uploadUrl: "/admin/service/upload-images",
            showUpload: false,
            allowedFileExtensions:['jpg', 'png', 'gif', 'svg'],
            overwriteInitial:false,
            maxFileSize:1500
        })
    });
</script>
@endsection