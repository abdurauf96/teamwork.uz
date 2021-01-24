@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Menu {{ $menu->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/menus') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/menus/' . $menu->id . '/edit') }}" title="Edit Menu"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/menus', $menu->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Menu',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $menu->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title Uz </th>
                                        <td> {{ $menu->title_uz }} </td>
                                    </tr>
                                    <tr><th> Title Ru </th><td> {{ $menu->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $menu->title_en }} </td></tr>
                                    <tr><th> Link </th><td> {{ $menu->link }} </td></tr>
                                    <tr><th> Order </th><td> {{ $menu->order }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
