<section class="ourWork">
    <div class="container">
        <h3 class="block-title" data-aos="fade-up" data-aos-duration="500">Bizning xizmatlar</h3>
        <div class="block-slug" data-aos="fade-up" data-aos-duration="700">10000 dan ziyod mutaxassislar sizga har xil topshiriqlar yechimida yordam berishga tayyor</div>

        <div class="row ow-bl">
            @foreach ($services as $service)
            <div class="col-lg-3 col-md-6 col-12">
                <a href="{{ route('viewService', $service->slug) }}" class="ow-item" data-aos="fade-up" data-aos-duration="250">
                    <div class="ow-item__img" style="background-color: #E0F7FC">
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
                <div class="fr">
                    <div class="block-title text-left">Loyihangiz sifatli bo'lishini istaysizmi?</div>
                    <div class="block-slug text-left">Sizda topshiriq bormi? Uni darhol <br /> Teamwork.uz ga topshiring</div>

                    <form action="#" class="mt-3">
                        <div class="site-inp">
                            <input type="text" placeholder="Ism">
                        </div>
                        <div class="site-inp">
                            <input type="text" placeholder="Telefon">
                        </div>

                        <div class="form-faq mb-4 block-slug text-left">
                            <span class="color-red">*</span> Sizning murojaatingiz qabul qilingandan so'ng biz siz bilan bog'lanamiz va sizga qo'limizdan kelgancha ko'maklashamiz...
                        </div>

                        <button class="btn-submit btn-more">Jo'natish </button>
                    </form>
                    <a href="#modalSucces" data-toggle="modal" data-target="#modalSucces">succes btn</a>
                </div>
            </div>
            <div class="col-lg-6">
                
                <div class="fr-img">
                    <img src="/img/form-img.png" alt="">
                </div>
                <!-- fr img block end -->

            </div>
        </div>
    </div>
</section>
<!-- block our-work -->