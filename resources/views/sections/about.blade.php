<section class="about @isset($class) {{ $class }} @endif" id="about">
    <div class="container">
        <div class="row align-items-center">
            @isset($about)
            <div class="col-lg-6 pl-0">
                <div class="about-vid">
        
                    <img src="/admin/images/{{ $about->image }}" alt="" data-aos="fade-right" data-aos-duration="500"/>
            
                    <a href="{{ $about->link }}" data-fancybox="video"  class="play-btn" data-aos="flip-right" data-aos-duration="700" data-aos-delay="500"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-main">
                    <h3 class="about-tit" data-aos="fade-up" data-aos-duration="500">{{ $about['main_title_'.App::getLocale()] }}</h3>
                    <div class="about-txt" data-aos="fade-up" data-aos-duration="700">
                        {{ $about['main_desc_'.App::getLocale()] }}
                    </div>
                    <article>
                        <div class="article-tit" data-aos="fade-up" data-aos-duration="900">
                            {{ $about['second_title_'.App::getLocale()] }}
                        </div>
                        <p data-aos="fade-up" data-aos-duration="950">{{ $about['second_desc_'.App::getLocale()] }}</p>
                    </article>
                    
                    @if (Route::currentRouteName()=='main')
                    <a href="about.html" class="btn-more" data-aos="fade-up" data-aos-duration="1000">
                         Batafsil
                    </a>
                    @else
                    <a href="t.me/teamwork" class="btn-more">
                        <i class="fab fa-telegram"></i> @teamwork_uz
                    </a>
                    @endif 
                </div>
            </div>
            @endisset
        </div>
    </div>
    @if (Route::currentRouteName()!='main')
    <div class="page-our-stockks pt-5">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fr">
                        <div class="block-title text-left">{{ $blokabout['title_'.\App::getLocale()] }} </div>
                        <div class="block-slug text-left">{{ $blokabout['desc_'.\App::getLocale()] }}</div>
                    </div>

                    <div class="progress-block mt--5 mb-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="progress-name">{{ $blokabout['result1_'.\App::getLocale()] }}</div>
                            <div class="progress-pros">{{ $blokabout['value1'] }}%</div>	
                        </div>
                        <div class="progress">
                          <div class="progress-bar blue-gradient" role="progressbar" style="width: {{ $blokabout['value1'] }}%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress-block mb-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="progress-name">{{ $blokabout['result2_'.\App::getLocale()] }}</div>
                            <div class="progress-pros">{{ $blokabout['value2'] }}%</div>	
                        </div>
                        <div class="progress">
                          <div class="progress-bar red-gradient" role="progressbar" style="width: {{ $blokabout['value2'] }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6">
                    
                    <div class="count-bl">
                        @foreach ($numbers as $num)
                        <div class="count-bl-item">
                            <div class="count-bl-item__num color-{{ $num->color }}">{{ $num->number }}</div>
                            <div class="count-bl-item__txt">{{ $num['title_'.\App::getLocale()] }}</div>
                        </div>
                        @endforeach
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- our-stockks end -->
    @endif
</section>
<!-- about -->