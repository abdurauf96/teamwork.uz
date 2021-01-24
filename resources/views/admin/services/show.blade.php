@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Service {{ $service->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/services') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/services/' . $service->id . '/edit') }}" title="Edit Service"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/services', $service->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Service',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $service->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $service->name_uz }} </td></tr>
                                    <tr><th> Name Ru </th><td> {{ $service->name_ru }} </td></tr>
                                    <tr><th> Name En </th><td> {{ $service->name_en }} </td></tr>

                                    <tr><th> Title Uz </th><td> {{ $service->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $service->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $service->title_en }} </td></tr>

                                    <tr><th> Body Uz </th><td> {{ $service->body_uz }} </td></tr>
                                    <tr><th> Body Ru </th><td> {{ $service->body_ru }} </td></tr>
                                    <tr><th> Body En </th><td> {{ $service->body_en }} </td></tr>
                                    <tr><th> Icon </th><td> <img width="80" src="/admin/images/{{ $service->icon }}" alt=""></td></tr>
                                    <tr><th> SEO Description </th><td> {{ $service->seo_desc }} </td></tr>
                                    <tr><th> SEO Keywors </th><td> {{ $service->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
