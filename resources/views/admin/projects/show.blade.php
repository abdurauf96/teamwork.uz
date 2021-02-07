@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Project {{ $project->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/projects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/projects/' . $project->id . '/edit') }}" title="Edit Project"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/projects', $project->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Project',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $project->id }}</td>
                                    </tr>
                                    <tr><th>Category </th><td>{{ $project->category['name_'.\App::getLocale()] }} </td></tr>
                                    
                                    <tr><th> Title Uz </th><td> {{ $project->title_uz }} </td></tr>
                                    <tr><th> Title Ru </th><td> {{ $project->title_ru }} </td></tr>
                                    <tr><th> Title En </th><td> {{ $project->title_en }} </td></tr>
                                    <tr><th> Description UZ </th><td> {{ $project->desc_uz }} </td></tr>
                                    <tr><th> Description RU </th><td> {{ $project->desc_ru }} </td></tr>
                                    <tr><th> Description EN </th><td> {{ $project->desc_en }} </td></tr>
                                    <tr><th> Body UZ </th><td> {{ $project->body_uz }} </td></tr>
                                    <tr><th> Body RU </th><td> {{ $project->body_ru }} </td></tr>
                                    <tr><th> Body EN </th><td> {{ $project->body_en }} </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $project->sep_desc }} </td></tr>
                                    <tr><th> SEO Keywords </th><td> {{ $project->seo_keyword }} </td></tr>
                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $project->image }}" width="80" alt=""> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
