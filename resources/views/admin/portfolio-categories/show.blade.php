@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">PortfolioCategory {{ $portfoliocategory->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/portfolio-categories') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/portfolio-categories/' . $portfoliocategory->id . '/edit') }}" title="Edit PortfolioCategory"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/portfoliocategories', $portfoliocategory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete PortfolioCategory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $portfoliocategory->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $portfoliocategory->name_uz }} </td></tr><tr><th> Name Ru </th><td> {{ $portfoliocategory->name_ru }} </td></tr><tr><th> Name En </th><td> {{ $portfoliocategory->name_en }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
