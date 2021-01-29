@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
    <x-slot name="parent">
        <li><a href="#">{{ $blokfeature['title_'.\App::getLocale()] }}</a></li>
    </x-slot>
    <x-slot name="active">
        {{ $feature['title_'.\App::getLocale()] }}
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
    <section class="partfolio page-partfolio">
            
        <div class="container">
            <h3 class="block-title">{{ $feature['title_'.\App::getLocale()] }}</h3>
           
            {!! $feature['body_'.\App::getLocale()] !!}

        </div>
       
        
    </section>

   
</main>
@endsection