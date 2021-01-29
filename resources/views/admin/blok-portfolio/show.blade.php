@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
          
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">BlokPortfolio {{ $blokportfolio->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-portfolio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-portfolio/' . $blokportfolio->id . '/edit') }}" title="Edit BlokPortfolio"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokportfolio', $blokportfolio->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokPortfolio',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokportfolio->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokportfolio->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokportfolio->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokportfolio->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokportfolio->desc_ru }} </td></tr>
                                    <tr><th> Title en </th><td> {{ $blokportfolio->title_en }} </td></tr>
                                    <tr><th> Description en </th><td> {{ $blokportfolio->desc_en }} </td></tr>
                                    <tr><th> SEO Description  </th><td> {{ $blokportfolio->seo_desc }} </td></tr>
                                    <tr><th> SEO Keyword </th><td> {{ $blokportfolio->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
