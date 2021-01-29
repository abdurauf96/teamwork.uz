@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">BlokProcce {{ $blokprocce->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-procces') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-procces/' . $blokprocce->id . '/edit') }}" title="Edit BlokProcce"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokprocces', $blokprocce->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokProcce',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokprocce->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokprocce->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokprocce->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokprocce->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokprocce->desc_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $blokprocce->title_en }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $blokprocce->desc_en }} </td></tr>
                                    <tr><th> Image  </th><td> <img src="/admin/images/{{ $blokprocce->image }}" width="100" alt="">  </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
