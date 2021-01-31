@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Feature {{ $feature->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/features') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/features/' . $feature->id . '/edit') }}" title="Edit Feature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/features', $feature->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Feature',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $feature->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $feature->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $feature->desc_uz }} </td></tr>
                                    <tr><th> Body Uz </th><td> {!! $feature->body_uz !!} </td></tr>

                                    <tr><th> Title RU </th><td> {{ $feature->title_ru }} </td></tr>
                                    <tr><th> Description RU </th><td> {{ $feature->desc_ru }} </td></tr>
                                    <tr><th> Body RU </th><td> {!! $feature->body_ru !!} </td></tr>
                                    
                                    <tr><th> Title EN </th><td> {{ $feature->title_en }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $feature->desc_en }} </td></tr>
                                    <tr><th> Body EN </th><td> {!! $feature->body_en !!} </td></tr>
                                    
                                    <tr><th> Icon </th><td> <img src="/admin/images/{{ $feature->icon }}" width="80" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
