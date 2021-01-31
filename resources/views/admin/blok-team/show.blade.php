@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">BlokTeam {{ $blokteam->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/blok-team') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/blok-team/' . $blokteam->id . '/edit') }}" title="Edit BlokTeam"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/blokteam', $blokteam->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete BlokTeam',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $blokteam->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $blokteam->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $blokteam->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $blokteam->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $blokteam->desc_ru }} </td></tr>
                                    <tr><th> Title en </th><td> {{ $blokteam->title_en }} </td></tr>
                                    <tr><th> Description en </th><td> {{ $blokteam->desc_en }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
