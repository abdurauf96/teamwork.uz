@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Link {{ $link->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/link') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/link/' . $link->id . '/edit') }}" title="Edit Link"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/link', $link->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Link',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $link->id }}</td>
                                    </tr>
                                    <tr><th> Footer block Title Uz </th><td> {{ $link->about_title_uz }} </td></tr>
                                    <tr><th> Footer block  Description Uz </th><td> {{ $link->about_desc_uz }} </td></tr>
                                    <tr><th> Contact Title Uz </th><td> {{ $link->contact_title_uz }} </td></tr>
                                    <tr><th> Contact Description Uz </th><td> {{ $link->contact_desc_uz }} </td></tr>
                                    <tr><th> Addres  Uz </th><td> {{ $link->addres_uz }} </td></tr>
                                    <tr><th> Footer Uz </th><td> {{ $link->footer_uz }} </td></tr>

                                    <tr><th> Footer block Title RU </th><td> {{ $link->about_title_ru }} </td></tr>
                                    <tr><th> Footer block  Description RU </th><td> {{ $link->about_desc_ru }} </td></tr>
                                    <tr><th> Contact Title RU </th><td> {{ $link->contact_title_ru }} </td></tr>
                                    <tr><th> Contact Description RU </th><td> {{ $link->contact_desc_ru }} </td></tr>
                                    <tr><th> Addres  RU </th><td> {{ $link->addres_ru }} </td></tr>
                                    <tr><th> Footer RU </th><td> {{ $link->footer_ru }} </td></tr>

                                    <tr><th> Footer block Title EN </th><td> {{ $link->about_title_en }} </td></tr>
                                    <tr><th> Footer block  Description EN </th><td> {{ $link->about_desc_en }} </td></tr>
                                    <tr><th> Contact Title EN </th><td> {{ $link->contact_title_en }} </td></tr>
                                    <tr><th> Contact Description EN </th><td> {{ $link->contact_desc_en }} </td></tr>
                                    <tr><th> Addres  EN </th><td> {{ $link->addres_en }} </td></tr>
                                    <tr><th> Footer EN </th><td> {{ $link->footer_en }} </td></tr>
                                    <tr><th> Project Name </th><td> {{ $link->project_name }} </td></tr>
                                    <tr><th> Project Logo </th><td> <img src="/admin/images/{{ $link->project_logo }}" alt=""></td></tr>
                                    <tr><th> Email </th><td> {{ $link->email }} </td></tr>
                                    <tr><th> Phone1 </th><td> {{ $link->phone1 }} </td></tr>
                                    <tr><th> Phone2 </th><td> {{ $link->phone2 }} </td></tr>
                                    <tr><th> Telegram </th><td> {{ $link->tg }} </td></tr>
                                    <tr><th> Instagram </th><td> {{ $link->insta }} </td></tr>
                                    <tr><th> Facebook </th><td> {{ $link->fb }} </td></tr>
                                    <tr><th> WK </th><td> {{ $link->wk }} </td></tr>
                                    <tr><th> TikTok </th><td> {{ $link->tiktok }} </td></tr>
                                    <tr><th> Youtube </th><td> {{ $link->youtube }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
