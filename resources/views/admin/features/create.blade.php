@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
         
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Feature</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/features') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/features', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.features.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
{{-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> --}}
<script src="https://cdn.tiny.cloud/1/8ggvfrgagsav9y3izwwzjzzrjm5p9g8ck4vtb7hpd55qyjx3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector:'textarea.body',
        width: 900,
        height: 300
    });
</script>
@endsection