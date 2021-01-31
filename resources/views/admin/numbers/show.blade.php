@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Number {{ $number->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/numbers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/numbers/' . $number->id . '/edit') }}" title="Edit Number"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/numbers', $number->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Number',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $number->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $number->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $number->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $number->title_en }} </td></tr>
                                    <tr><th> Number </th><td> {{ $number->number }} </td></tr>
                                    <tr><th> Color </th><td> {{ $number->color }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
