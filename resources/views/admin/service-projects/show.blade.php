@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">ServiceProject {{ $serviceproject->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/service-projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/service-projects/' . $serviceproject->id . '/edit') }}" title="Edit ServiceProject"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/serviceprojects', $serviceproject->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete ServiceProject',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $serviceproject->id }}</td>
                                    </tr>
                                    <tr><th> Service </th><td> {{ $serviceproject->service['name_'.\App::getLocale()] }} </td></tr>
                                    <tr><th> Project name Uz </th><td> {{ $serviceproject->name_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $serviceproject->desc_uz }} </td></tr>
                                    <tr><th> Project name RU </th><td> {{ $serviceproject->name_ru }} </td></tr>
                                    <tr><th> Description RU </th><td> {{ $serviceproject->desc_ru }} </td></tr>
                                    <tr><th> Project name EN </th><td> {{ $serviceproject->name_en }} </td></tr>
                                    <tr><th> Description EN </th><td> {{ $serviceproject->desc_en }} </td></tr>
                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $serviceproject->image }}" width="80" alt=""></td></tr>
                                    <tr><th> Link </th><td> {{ $serviceproject->link }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
