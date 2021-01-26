@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Personal {{ $personal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/personals') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/personals/' . $personal->id . '/edit') }}" title="Edit Personal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/personals', $personal->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Personal',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personal->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $personal->name_uz }} </td></tr>
                                    <tr><th> Profession Uz </th><td> {{ $personal->profession_uz }} </td></tr>
                                    <tr><th> About Uz </th><td> {{ $personal->about_uz }} </td></tr>

                                    <tr><th> Name RU </th><td> {{ $personal->name_ru }} </td></tr>
                                    <tr><th> Profession RU </th><td> {{ $personal->profession_ru }} </td></tr>
                                    <tr><th> About RU </th><td> {{ $personal->about_ru }} </td></tr>

                                    <tr><th> Name EN </th><td> {{ $personal->name_en }} </td></tr>
                                    <tr><th> Profession EN </th><td> {{ $personal->profession_en }} </td></tr>
                                    <tr><th> About EN </th><td> {{ $personal->about_en }} </td></tr>

                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $personal->image }}" width="80" alt=""> </td></tr>
                                    <tr><th> Telegram </th><td> {{ $personal->tg }} </td></tr>
                                    <tr><th> Facebook </th><td> {{ $personal->fb }} </td></tr>
                                    <tr><th> Instagram </th><td> {{ $personal->insta }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
