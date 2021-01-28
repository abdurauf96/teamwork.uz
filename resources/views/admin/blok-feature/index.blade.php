@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blok feature</div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/admin/blok-feature/create') }}" class="btn btn-success btn-sm" title="Add New BlokFeature">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        {{-- {!! Form::open(['method' => 'GET', 'url' => '/admin/blok-feature', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                        <th>#</th><th>Title </th><th width="600"    >Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blokfeature as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title_uz }}</td>
                                        <td>{{ $item->desc_uz }}</td>
                                        
                                        <td>
                                            <a href="{{ url('/admin/blok-feature/' . $item->id) }}" title="View BlokFeature"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/blok-feature/' . $item->id . '/edit') }}" title="Edit BlokFeature"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {{-- {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/blok-feature', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete BlokFeature',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!} --}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $blokfeature->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
