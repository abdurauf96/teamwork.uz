@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
    <x-slot name="parent">
        <li><a href="/portfolio">Portfolio</a></li>
    </x-slot>
    <x-slot name="active">
        {{ $project['title_'.\App::getLocale()] }}
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
		
    <section class="partfolio page-partfolio">
    
        <div class="container">
            <h3 class="block-title">{{ $project['title_'.\App::getLocale()] }}</h3>
            <div class="block-slug">{{ $project['desc_'.\App::getLocale()] }}</div>

            <div class="work-img">
                <img class="lazy" data-src="/admin/images/{{ $project->image }}" alt="work image">
            </div>
        </div>

        <div class="container">
            
            <h3 class="block-title">Boshqa loyihalarimiz</h3>
            <p class="block-slug">Barcha turdagi loyihalar bilan tanishing</p>
                <div class="other-work-sl owl-carousel">
                    @foreach ($other_projects as $pro)
                    <div class="tb-filter">
                        <div class="h-100 position-relative">
                            <a href="{{ route('viewPortfolio', $pro->slug) }}" class="partfolio-it">
                                <img src="/admin/images/{{ $pro->image }}" alt="">

                                <span class="partfolio-it__main">
                                    <span class="partfolio-it__category">{{ $pro->category['name_'.\App::getLocale()] }}</span>
                                    <span class="partfolio-it__name">{{ $pro['title_'.\App::getLocale()] }}</span>
                                </span>
                            </a>
                            <div class="partfolio-it-btns">
                                <button class="partfolio-it__search"></button>
                                <button class="partfolio-it__prik"></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>

        </div>

    </section>
<!-- partfolio section -->
</main>
@endsection