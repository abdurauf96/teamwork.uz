@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">BlokPartner {{ $blokpartner->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-partner') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-partner/' . $blokpartner->id . '/edit') }}" title="Edit BlokPartner"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokpartner', $blokpartner->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokPartner',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokpartner->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokpartner->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokpartner->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokpartner->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokpartner->desc_ru }} </td></tr>
                                    <tr><th> Title en </th><td> {{ $blokpartner->title_en }} </td></tr>
                                    <tr><th> Description en </th><td> {{ $blokpartner->desc_en }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
