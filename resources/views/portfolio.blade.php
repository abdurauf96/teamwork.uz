@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
   
    <x-slot name="active">
        Portfolio
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
		
    <section class="partfolio page-partfolio">
    
        <div class="container">
            
            <div class="row align-items-end justify-content-between">
                <div class="col-lg-4 col-12">
                    <div class="part-hash color-orange mb-3">#PORTFOLIO</div>
                    <h3 class="block-title text-left">{{ $blokportfolio['title_'.\App::getLocale()] }}</h3>
                    <p class="color-dark mb-0">{{ $blokportfolio['desc_'.\App::getLocale()] }}</p>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="part-tabss d-flex align-items-center justify-content-between">
                        <button class="btn-prev"><i class="fa fa-arrow-left"></i></button>
                        <div class="part-tab owl-carousel">
                            <a href="#" id="filter-all" class="part-tab__link">All</a>
                            @foreach ($categories as $cat)
                            <a href="#" id="filter-{{ $cat->id }}" class="part-tab__link">{{ $cat['name_'.\App::getLocale()] }}</a>
                            @endforeach
                            
                        </div>
                        <button class="btn-next"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="col-12">
                    
                    <div class="tb-wrap row" id="tb-wrap">
                        @foreach ($projects as $project)
                        <div class="col-lg-3 col-md-4 col-6 tb-filter filter-{{ $project->portfolio_category_id }} filter-all">
                            <div class="h-100 position-relative">
                                <a href="{{ route('viewPortfolio', $project->slug) }}" class="partfolio-it">
                                    <img src="/admin/images/{{ $project->image }}" alt="">

                                    <span class="partfolio-it__main">
                                        <span class="partfolio-it__category">{{ $project->category['name_'.\App::getLocale()] }}</span>
                                        <span class="partfolio-it__name">{{ $project['title_'.\App::getLocale()] }}</span>
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

        </div>

    </section>
<!-- partfolio section -->
</main>
@endsection