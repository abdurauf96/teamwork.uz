@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Blokservice</div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/admin/blok-service/create') }}" class="btn btn-success btn-sm" title="Add New BlokService">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <hr> --}}
                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/admin/blok-service', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} --}}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Title </th>
                                        <th>Description </th>
                                       
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blokservice as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title_uz }}</td>
                                        <td>{{ $item->desc_uz }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/admin/blok-service/' . $item->id) }}" title="View BlokService"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/blok-service/' . $item->id . '/edit') }}" title="Edit BlokService"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {{-- {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/blok-service', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete BlokService',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!} --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $blokservice->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
