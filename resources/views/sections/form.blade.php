<section class="form-call">
    <div class="container mt--5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-md-0 mb-5">
                
                <div class="" data-aos="fade-right" data-aos-duration="500">
                    <img src="/admin/images/{{ setting('form2_img') }}" alt="">
                </div>
                <!-- fr img block end -->

            </div>
            <div class="col-lg-6">
                <div class="fr" data-aos="fade-left" data-aos-duration="500">
                    <div class="block-title text-left">@lang('messages.pro_title')</div>
                    <div class="block-slug text-left">@lang('messages.pro_desc')</div>
                    @livewire('message')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section form call with us end -->