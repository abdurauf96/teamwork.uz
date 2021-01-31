@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
        
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Services</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/services/create') }}" class="btn btn-success btn-sm" title="Add New Service">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <hr>
                        {!! Form::open(['method' => 'GET', 'url' => '/admin/services', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Service Name </th>
                                        <th>Service Title </th>
                                        <th>Service Body </th>
                                        <th>Icon </th>
                                        <th>SEO Description </th>
                                        <th>SEO Keywords </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item['name_'.\App::getLocale()] }}</td>
                                        <td>{{ $item['title_'.\App::getLocale()] }}</td>
                                        <td>{{ $item['body_'.\App::getLocale()] }}</td>
                                        <td><img width="60" src="/admin/images/{{ $item->icon }}" alt=""></td>
                                        <td>{{ $item->seo_desc }}</td>
                                        <td>{{ $item->seo_keyword }}</td>
                                        <td>
                                            <a href="{{ url('/admin/services/' . $item->id) }}" title="View Service"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/services/' . $item->id . '/edit') }}" title="Edit Service"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/services', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Service',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $services->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
