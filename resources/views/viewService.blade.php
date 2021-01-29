@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
    <x-slot name="parent">
        <li><a href="/services">@lang('messages.services')</a></li>
    </x-slot>
    <x-slot name="active">
        {{ $service['name_'.\App::getLocale()] }}
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
    <section class="partfolio page-partfolio">
            
        <div class="container">
            <h3 class="block-title">{{ $service['title_'.\App::getLocale()] }}</h3>
            <div class="block-slug">{{ $service['body_'.\App::getLocale()] }}</div>

            <div class="design-t row">
                @foreach ($service->types as $type)
                <div class="col-md-6 col-12 mb-4">
                    <div class="design-t-item design-t__item">
                        <div class="design-t-item__img" style="background-color: #FFDCDC">
                            <img src="/admin/images/{{ $type->image }}" alt="">
                        </div>
                        <div class="design-t-item__main">
                            <b>{{ $type['title_'.\App::getLocale()] }}</b>
                            <p>{{ $type['desc_'.\App::getLocale()] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>

        </div>
        @if (count($service->technologies)>0)
        <div class="container pt-5">
            <div class="texno-section">
                <h3 class="block-title">@lang('messages.logo')</h3>

                <div class="row mt-5 justify-content-center">
                    @foreach ($service->technologies as $tech)
                    <div class="col-auto mb-4">
                        <div class="texno-section-item ">
                            <img src="/admin/images/{{ $tech->image }}" alt="">
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        @endif
        
    </section>

    <div class="section">
        <div class="container">
            <h3 class="block-title">@lang('messages.done_pro')</h3>
            <div class="block-slug">@lang('messages.our_pro')</div>
        
            <div class="done-project-sl owl-carousel">
                @foreach ($other_projects as $pro)
                <a href="{{ $pro->link }}" class="done-project-item">
                    <div class="done-project-item__img"><img src="/admin/images/{{ $pro->image }}" alt=""></div>
                    <div class="done-project-item__main">
                        <div class="done-project-item__title">{{ $pro['name_'.\App::getLocale()] }}</div>
                        <div class="done-project-item__autor">{{ $pro['desc_'.\App::getLocale()] }}</div>
                    </div>
                </a>
                @endforeach

            </div>

        </div>
    </div>
    @include('sections.services')
</main>
@endsection