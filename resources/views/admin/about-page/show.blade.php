@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">About Page {{ $aboutpage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/about-page') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/about-page/' . $aboutpage->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/about-page', $aboutpage->id],
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
                                        <th>ID</th><td>{{ $aboutpage->id }}</td>
                                    </tr>
                                    <tr><th> Main Title Uz </th><td> {{ $aboutpage['main_title_uz'] }} </td></tr>
                                    <tr><th> Main description Uz </th><td> {{ $aboutpage->main_desc_uz }} </td></tr>
                                    <tr><th> Second Title UZ </th><td> {{ $aboutpage->second_title_uz }} </td></tr>
                                    <tr><th> Second description UZ  </th><td> {{ $aboutpage->second_desc_uz }} </td></tr>

                                    <tr><th> Main Title RU </th><td> {{ $aboutpage['main_title_ru'] }} </td></tr>
                                    <tr><th> Main description RU </th><td> {{ $aboutpage->main_desc_ru }} </td></tr>
                                    <tr><th> Second Title RU </th><td> {{ $aboutpage->second_title_ru }} </td></tr>
                                    <tr><th> Second description RU  </th><td> {{ $aboutpage->second_desc_ru }} </td></tr>

                                    <tr><th> Main Title EN </th><td> {{ $aboutpage['main_title_en'] }} </td></tr>
                                    <tr><th> Main description EN </th><td> {{ $aboutpage->main_desc_en }} </td></tr>
                                    <tr><th> Second Title EN </th><td> {{ $aboutpage->second_title_en }} </td></tr>
                                    <tr><th> Second description EN  </th><td> {{ $aboutpage->second_desc_en }} </td></tr>
                                    
                                    <tr><th> Image </th><td> <img width="80" src="/admin/images/{{ $aboutpage->image }}" alt=""></td></tr>
                                    <tr><th> Link </th><td> {{ $aboutpage->link }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
