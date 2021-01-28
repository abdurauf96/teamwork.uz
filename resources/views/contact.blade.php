@extends('layouts.site')

@section('breadcrumb')
<x-breadcrumb >
   
    <x-slot name="active">
        Biz bilan bog'lanish
    </x-slot>
</x-breadcrumb>
@endsection

@section('content')
<main class="page-main">
		
    <div class="contact-page page-partfolio">
        
        <div class="container">
            <div class="row justify-content-md-between pb-5">
                <div class="col-lg-5 col-md-6 col-12 mb-5">
                    
                    <div class="block-title text-left contact-page__title">Biz bilan bog'lanish</div>
                    <div class="block-slug mt-2 text-left">{{ setting('about_'.\App::getLocale()) }}</div>

                    <div class="con-page-bl mt-5">
                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--blue"><img src="img/worldwide.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                {{ setting('addres_'.\App::getLocale()) }}
                            </div>
                        </div>

                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--dblue"><img src="img/contact-book.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                <a href="tel:+998 (90) 780 06 60">{{ setting('phone1')	 }}</a>
                                <a href="tel:+998 (90) 780 06 60">{{ setting('phone2')	 }}</a>
                            </div>
                        </div>

                        <div class="con-page-item">
                            <div class="con-page-item__img con-page-item__img--red"><img src="img/direct.svg" alt=""></div>
                            <div class="con-page-item__txt">
                                <a href="mailto:Info@teamwork.uz">Info@teamwork.uz</a>
                                <a href="https://t.me/teamworkuz">t.me/teamworkuz</a>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6131044.441927201!2d64.57358194999999!3d41.38116605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1609735453200!5m2!1sru!2s" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</main>    
@endsection