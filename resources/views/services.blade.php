@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
    <x-slot name="active">
        @lang('messages.services')
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">		
    <section class="page-avantage">
        <div class="container">
            <h3 class="block-title">{{ $blokservice['title_'.\App::getLocale()] }}</h3>
            <div class="block-slug mb-5">{{ $blokservice['desc_'.\App::getLocale()] }}</div>

            <div class="row">
                @foreach ($services as $service)
                <div class="page-avantage-item avantage-item">
                    <a href="{{ route('viewService', $service->slug) }}" class="avantage-item-wr">
                        <div class="ow-item__img mb-3" style="background-color: #E0F7FC">
                            <img src="/admin/images/{{ $service->image }}" alt="logo des">
                        </div>
                        <div class="avantage-item__tit">
                            {{ $service['name_'.\App::getLocale()] }}
                        </div>
                        <div class="avantage-item__txt">
                            {{ Str::of( $service['body_'.\App::getLocale()] )->limit(55) }}
                        </div>
                    </a>
                </div> 
                @endforeach
                
            </div>

        </div>
    </section>
</main>
@endsection