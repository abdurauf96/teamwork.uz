@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">BlokAbout {{ $blokabout->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-about') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-about/' . $blokabout->id . '/edit') }}" title="Edit BlokAbout"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokabout', $blokabout->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokAbout',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokabout->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokabout->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokabout->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokabout->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokabout->desc_uz }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $blokabout->title_en }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $blokabout->desc_en }} </td></tr>
                                    <tr><th> Result1 UZ </th><td> {{ $blokabout->result1_uz }} </td></tr>
                                    <tr><th> Result1 Ru </th><td> {{ $blokabout->result1_ru }} </td></tr>
                                    <tr><th> Result1 En </th><td> {{ $blokabout->result1_en }} </td></tr>
                                    <tr><th> Value1</th><td> {{ $blokabout->value1 }} </td></tr>
                                    <tr><th> Result2 UZ </th><td> {{ $blokabout->result2_uz }} </td></tr>
                                    <tr><th> Result2 Ru </th><td> {{ $blokabout->result2_ru }} </td></tr>
                                    <tr><th> Result2 En </th><td> {{ $blokabout->result2_en }} </td></tr>
                                    <tr><th> Value2</th><td> {{ $blokabout->value1 }} </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $blokabout->seo_desc }} </td></tr>
                                    <tr><th> SEO Keywords  </th><td> {{ $blokabout->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
