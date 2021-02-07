@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">TopBlock {{ $topblock->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/top-block') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/top-block/' . $topblock->id . '/edit') }}" title="Edit TopBlock"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/topblock', $topblock->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete TopBlock',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $topblock->id }}</td>
                                    </tr>
                                    <tr><th> Title Uz </th><td> {{ $topblock->title_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $topblock->desc_uz }} </td></tr>
                                    <tr><th> Body Uz </th><td> {{ $topblock->body_uz }} </td></tr>

                                    <tr><th> Title RU </th><td> {{ $topblock->title_ru }} </td></tr>
                                    <tr><th> Description RU </th><td> {{ $topblock->desc_ru }} </td></tr>
                                    <tr><th> Body RU </th><td> {{ $topblock->body_ru }} </td></tr>

                                    <tr><th> Title En </th><td> {{ $topblock->title_en }} </td></tr>
                                    <tr><th> Description En </th><td> {{ $topblock->desc_en }} </td></tr>
                                    <tr><th> Body En </th><td> {{ $topblock->body_en }} </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $topblock->seo_desc }} </td></tr>
                                    <tr><th> SEO Keyword </th><td> {{ $topblock->seo_keyword }} </td></tr>
                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $topblock->image }}" width="100" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
