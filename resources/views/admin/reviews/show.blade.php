@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Review {{ $review->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/reviews') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/reviews/' . $review->id . '/edit') }}" title="Edit Review"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/reviews', $review->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Review',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $review->id }}</td>
                                    </tr>
                                    <tr><th> Name Uz </th><td> {{ $review->name_uz }} </td></tr>
                                    <tr><th> Profession Uz </th><td> {{ $review->profession_uz }} </td></tr>
                                    <tr><th> Description Uz </th><td> {{ $review->desc_uz }} </td></tr>
                                    <tr><th> Name RU </th><td> {{ $review->name_ru }} </td></tr>
                                    <tr><th> Profession RU </th><td> {{ $review->profession_ru }} </td></tr>
                                    <tr><th> Description RU </th><td> {{ $review->desc_ru }} </td></tr>
                                    <tr><th> Name EN </th><td> {{ $review->name_en }} </td></tr>
                                    <tr><th> Profession EN </th><td> {{ $review->profession_en }} </td></tr>
                                    <tr><th> Description EN </th><td> {{ $review->desc_en }} </td></tr>
                                    <tr><th> Rating </th><td> <div data-score="{{ $review->star }}" class="star"></div> </td></tr>
                                    <tr><th> Image </th><td> <img src="/admin/images/{{ $review->image }}" width="80" alt=""> </td></tr>
                                    <tr><th> SEO Description </th><td> {{ $review->seo_desc }} </td></tr>
                                    <tr><th> SEO Keywords </th><td> {{ $review->seo_keyword }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('.star').raty();
    </script>
@endsection