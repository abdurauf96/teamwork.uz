@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ServiceType {{ $servicetype->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/service-types') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/service-types/' . $servicetype->id . '/edit') }}" title="Edit ServiceType"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/servicetypes', $servicetype->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete ServiceType',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $servicetype->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $servicetype->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $servicetype->desc_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $servicetype->title_ru }} </td></tr>
                                    <tr><th> Description Ru </th><td> {{ $servicetype->desc_ru }} </td></tr>
                                    <tr><th> Title EN </th><td> {{ $servicetype->title_en }} </td></tr>
                                    <tr><th> Description EN </th><td> {{ $servicetype->desc_en }} </td></tr>
                                    <tr><th>Service </th><td> {{ $servicetype->service['name_'.\App::getLocale()] }} </td></tr>
                                    <tr><th>Image </th><td><img src="/admin/images/{{ $servicetype->image }}" width="80" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
