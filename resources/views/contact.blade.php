@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
   
    <x-slot name="active">
        @lang('messages.contactUs')
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
		
    <div class="contact-page page-partfolio">
        
        <div class="container">
            <div class="row justify-content-md-between pb-5">
                <div class="col-lg-5 col-md-6 col-12 mb-5">
                    
                    <div class="block-title text-left contact-page__title">{{ $link['contact_title_'.\App::getLocale()] }}</div>
                    <div class="block-slug mt-2 text-left">{{ $link['contact_desc_'.\App::getLocale()] }}</div>

                    <div class="con-page-bl mt-5">
                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--blue"><img src="img/worldwide.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                {{ $link['addres_'.\App::getLocale()] }}
                            </div>
                        </div>

                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--dblue"><img src="img/contact-book.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                <a href="tel:{{ $link->phone1}}">{{ $link->phone1	}}</a>
                                <a href="tel:{{ $link->phone2}}">{{ $link->phone2	}}</a>
                            </div>
                        </div>

                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--red"><img src="img/direct.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                <a href="mailto:Info@teamwork.uz">{{ $link->email	}}</a>
                                <a href="http://{{ $link->tg}}">{{ $link->tg	}}</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 col-12 mb-5">
                    @livewire('contact')
                </div>
            </div>
        </div>

        <div class="contact-page-map">
            <iframe src="{{ setting('map') }}" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</main>    
@endsection