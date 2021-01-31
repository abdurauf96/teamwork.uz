@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">BlokService {{ $blokservice->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-service') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-service/' . $blokservice->id . '/edit') }}" title="Edit BlokService"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {{-- {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokservice', $blokservice->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokService',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!} --}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokservice->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokservice->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokservice->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokservice->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokservice->description_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $blokservice->title_en }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $blokservice->description_en }} </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $blokservice->seo_desc }} </td></tr>
                                    <tr><th> SEO Keywords </th><td> {{ $blokservice->seo_keyword }} </td></tr>
                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $blokservice->image }}" width="100" alt="">  </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
