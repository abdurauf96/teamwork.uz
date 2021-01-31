@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">BlokFeature {{ $blokfeature->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-feature') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-feature/' . $blokfeature->id . '/edit') }}" title="Edit BlokFeature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {{-- {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokfeature', $blokfeature->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokFeature',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!} --}}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokfeature->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokfeature->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokfeature->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokfeature->title_ru }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokfeature->desc_ru }} </td></tr>
                                    <tr><th> Title EN </th><td> {{ $blokfeature->title_en }} </td></tr>
                                    <tr><th> Description EN </th><td> {{ $blokfeature->desc_en }} </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $blokfeature->seo_desc }} </td></tr>
                                    <tr><th> SEO Keywords  </th><td> {{ $blokfeature->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
