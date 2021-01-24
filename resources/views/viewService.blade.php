@extends('layouts.site')

@section('content')
<main class="page-main">
    <section class="partfolio page-partfolio">
            
        <div class="container">
            <h3 class="block-title">{{ $service['title_'.\App::getLocale()] }}</h3>
            <div class="block-slug">{{ $service['body_'.\App::getLocale()] }}</div>

            <div class="design-t row">
                <div class="col-md-6 col-12 mb-4">
                    <div class="design-t-item design-t__item">
                        <div class="design-t-item__img" style="background-color: #FFDCDC">
                            <img src="/img/awesome-apple.svg" alt="">
                        </div>
                        <div class="design-t-item__main">
                            <b>Simvolli logotiplar</b>
                            <p>kompaniyaga assotsiativ ravishda olib keladigan turli xil belgilar ishlatiladi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <div class="design-t-item design-t__item">
                        <div class="design-t-item__img" style="background-color: #E9DCFF">
                            <img src="/img/format-color-text.svg" alt="">
                        </div>
                        <div class="design-t-item__main">
                            <b>Simvolli logotiplar</b>
                            <p>kompaniyaga assotsiativ ravishda olib keladigan turli xil belgilar ishlatiladi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <div class="design-t-item design-t__item">
                        <div class="design-t-item__img" style="background-color: #FFF8CC">
                            <img src="/img/logo-sass.svg" alt="">
                        </div>
                        <div class="design-t-item__main">
                            <b>Simvolli logotiplar</b>
                            <p>kompaniyaga assotsiativ ravishda olib keladigan turli xil belgilar ishlatiladi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 mb-4">
                    <div class="design-t-item design-t__item">
                        <div class="design-t-item__img" style="background-color: #ECFCFF">
                            <img src="/img/simple-letterboxd.svg" alt="">
                        </div>
                        <div class="design-t-item__main">
                            <b>Simvolli logotiplar</b>
                            <p>kompaniyaga assotsiativ ravishda olib keladigan turli xil belgilar ishlatiladi</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container pt-5">
            <div class="texno-section">
                <h3 class="block-title">Logotip quyidagi texnologiyalar orqali chiziladi. Siz istagan tur bo'yicha</h3>

                <div class="row mt-5 justify-content-center">
                    <div class="col-auto mb-4">
                        <div class="texno-section-item ">
                            <img src="/img/adobe-illustrator-cc.png" alt="">
                        </div>
                    </div>
                    <div class="col-auto mb-4">
                        <div class="texno-section-item">
                            <img src="/img/photoshop-cc.png" alt="">
                        </div>
                    </div>
                    <div class="col-auto mb-4">
                        <div class="texno-section-item">
                            <img src="/img/corel-d.png" alt="">
                        </div>
                    </div>
                    <div class="col-auto mb-4">
                        <div class="texno-section-item">
                            <img src="/img/png.png" alt="">
                        </div>
                    </div>
                    <div class="col-auto mb-4">
                        <div class="texno-section-item">
                            <img src="/img/tiff-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <h3 class="block-title">Bajarilgan loyihalar</h3>
            <div class="block-slug">Bizning tajribali mutaxassislarimiz tomonidan yaratilgan loyihalar bilan tanishing</div>
        
            <div class="done-project-sl owl-carousel">
                <a href="work1.html" class="done-project-item">
                    <div class="done-project-item__img"><img src="/img/done.jpg" alt=""></div>
                    <div class="done-project-item__main">
                        <div class="done-project-item__title">Turkish Medical</div>
                        <div class="done-project-item__autor">Dizayner: Xurshid Istamov</div>
                    </div>
                </a>
                <a href="work1.html" class="done-project-item">
                    <div class="done-project-item__img"><img src="/img/done1.jpg" alt=""></div>
                    <div class="done-project-item__main">
                        <div class="done-project-item__title">Turkish Medical</div>
                        <div class="done-project-item__autor">Dizayner: Xurshid Istamov</div>
                    </div>
                </a>
                <a href="work1.html" class="done-project-item">
                    <div class="done-project-item__img"><img src="/img/done2.jpg" alt=""></div>
                    <div class="done-project-item__main">
                        <div class="done-project-item__title">Turkish Medical</div>
                        <div class="done-project-item__autor">Dizayner: Xurshid Istamov</div>
                    </div>
                </a>
                <a href="work1.html" class="done-project-item">
                    <div class="done-project-item__img"><img src="/img/done1.jpg" alt=""></div>
                    <div class="done-project-item__main">
                        <div class="done-project-item__title">Turkish Medical</div>
                        <div class="done-project-item__autor">Dizayner: Xurshid Istamov</div>
                    </div>
                </a>

            </div>

        </div>
    </div>
    @include('sections.services')
</main>
@endsection