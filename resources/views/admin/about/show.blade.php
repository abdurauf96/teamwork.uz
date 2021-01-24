@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">About {{ $about->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/about') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/about/' . $about->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/about', $about->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete About',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $about->id }}</td>
                                    </tr>
                                    <tr><th> Main Title Uz </th><td> {{ $about['main_title_uz'] }} </td></tr>
                                    <tr><th> Main description Uz </th><td> {{ $about->main_desc_uz }} </td></tr>
                                    <tr><th> Second Title UZ </th><td> {{ $about->second_title_uz }} </td></tr>
                                    <tr><th> Second description UZ  </th><td> {{ $about->second_desc_uz }} </td></tr>

                                    <tr><th> Main Title RU </th><td> {{ $about['main_title_ru'] }} </td></tr>
                                    <tr><th> Main description RU </th><td> {{ $about->main_desc_ru }} </td></tr>
                                    <tr><th> Second Title RU </th><td> {{ $about->second_title_ru }} </td></tr>
                                    <tr><th> Second description RU  </th><td> {{ $about->second_desc_ru }} </td></tr>

                                    <tr><th> Main Title EN </th><td> {{ $about['main_title_en'] }} </td></tr>
                                    <tr><th> Main description EN </th><td> {{ $about->main_desc_en }} </td></tr>
                                    <tr><th> Second Title EN </th><td> {{ $about->second_title_en }} </td></tr>
                                    <tr><th> Second description EN  </th><td> {{ $about->second_desc_en }} </td></tr>
                                    
                                    <tr><th> Image </th><td> <img width="80" src="/admin/images/{{ $about->image }}" alt=""></td></tr>
                                    <tr><th> Link </th><td> {{ $about->link }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
