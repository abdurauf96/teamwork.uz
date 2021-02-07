<section class="form-call2">
    <div class="container mt--5">
        <div class="row align-items-center">
            
            <div class="col-lg-6">
                
                <div class="fr @if(Route::currentRouteName()=='main') form-white @endif" data-aos="fade-right" >
                    <div class="block-title text-left">@lang('messages.pro_title')</div>
                    <div class="block-slug text-left">@lang('messages.pro_desc')</div>

                    @livewire('project-form2')
                </div>
            </div>
            <div class="col-lg-6 mt-md-0 mt-5">
                
                <div class="" data-aos="fade-left" data-aos-duration="300">
                    <img src="/admin/images/{{ setting('form3_img') }}" alt="">
                </div>
                <!-- fr img block end -->

            </div>
        </div>
    </div>
</section>
<!-- section form call2 with us end -->