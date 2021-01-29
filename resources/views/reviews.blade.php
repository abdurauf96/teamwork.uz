@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
    <x-slot name="active">
        {{ $blokreview['title_'.\App::getLocale()] }}
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
		
    @include('sections.reviews', ['reviews'=>$reviews])
<!-- our team section end -->
  
</main>
@endsection