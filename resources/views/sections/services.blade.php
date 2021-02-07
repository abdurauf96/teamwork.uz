<section class="ourWork">
    <div class="container">
        <h3 class="block-title" data-aos="fade-up" data-aos-duration="500">{{ $blokservice['title_'.\App::getLocale()] }}</h3>
        <div class="block-slug" data-aos="fade-up" data-aos-duration="700">{{ $blokservice['desc_'.\App::getLocale()] }}</div>

        <div class="row ow-bl">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6 col-12">
                <a href="{{ route('viewService', $service->slug) }}" class="ow-item" data-aos="fade-up" data-aos-duration="250">
                    <div class="ow-item__img" style="background-color: {{ $service->color }}">
                        <img src="/admin/images/{{ $service->icon }}" alt="logo des">
                    </div>
                    <div class="ow-item__txt">
                        {{ $service['name_'.\App::getLocale()] }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <div class="container mt--5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                @if(Route::currentRouteName()=='main')
                <div class="fr form-white">
                    <div class="block-title text-left">@lang('messages.pro_title')</div>
                    <div class="block-slug text-left">@lang('messages.pro_desc')</div>
                    @livewire('message')
                </div>
                @else
                <div class="fr" data-aos="fade-right" >
                    <div class="block-title text-left">@lang('messages.pro_title')</div>
                    <div class="block-slug text-left">@lang('messages.pro_desc')</div>
                    @livewire('project-form2')
                </div>
                
                @endif
                    {{-- <a href="#modalSucces" data-toggle="modal" data-target="#modalSucces">succes btn</a> --}}
                
            </div>
            <div class="col-lg-6">
                
                <div class="fr-img">
                    <img src="/admin/images/{{ setting('form1_img')	 }}" alt="">
                </div>
                <!-- fr img block end -->

            </div>
        </div>
    </div>
</section>
<!-- block our-work -->