@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Partner {{ $partner->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/partners') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/partners/' . $partner->id . '/edit') }}" title="Edit Partner"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/partners', $partner->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Partner',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $partner->id }}</td>
                                    </tr>
                                    <tr><th> Logo </th><td> <img src="/admin/images/{{ $partner->logo }}" width="100" alt=""> </td></tr>
                                    <tr><th> Link </th><td> {{ $partner->link }} </td></tr>
                                    <tr><th> Seo Description </th><td> {{ $partner->seo_desc }} </td></tr>
                                    <tr><th> Seo keywords </th><td> {{ $partner->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
