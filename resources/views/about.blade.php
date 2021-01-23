@extends('layouts.site')

@section('content')
<main class="page-main">
    @include('sections.about', ['class'=>'about-page'])
    @include('sections.team')
    @include('sections.form2')
</main>
@endsection