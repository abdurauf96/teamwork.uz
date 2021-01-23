<section class="about @isset($class) {{ $class }} @endif" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pl-0">
                <div class="about-vid">
                    <img src="img/about-pic.png" alt="" data-aos="fade-right" data-aos-duration="500"/>
                    <a href="https://www.youtube.com/watch?v=Z5zUpeNesJg" data-fancybox="video"  class="play-btn" data-aos="flip-right" data-aos-duration="700" data-aos-delay="500"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-main">
                    <h3 class="about-tit" data-aos="fade-up" data-aos-duration="500">Teamwork jamoasi bilan ishlash sizga cheksiz  imkoniyatlarni taqdim qiladi</h3>
                    <div class="about-txt" data-aos="fade-up" data-aos-duration="700">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.
                    </div>
                    <article>
                        <div class="article-tit" data-aos="fade-up" data-aos-duration="900">
                            Chumchuq so'ysa ham, qassob so'ysin!
                        </div>
                        <p data-aos="fade-up" data-aos-duration="950">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
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
        </div>
    </div>
    @if (Route::currentRouteName()!='main')
    <div class="page-our-stockks pt-5">
        <div class="container pt-4">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fr">
                        <div class="block-title text-left">Bugungi kungi natijalar <br />(Biz haqimizda sonlarda) </div>
                        <div class="block-slug text-left">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</div>
                    </div>

                    <div class="progress-block mt--5 mb-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="progress-name">Qandaydir natija</div>
                            <div class="progress-pros">95%</div>	
                        </div>
                        <div class="progress">
                          <div class="progress-bar blue-gradient" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress-block mb-5">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="progress-name">Qandaydir natija</div>
                            <div class="progress-pros">100%</div>	
                        </div>
                        <div class="progress">
                          <div class="progress-bar red-gradient" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>


                </div>

                <div class="col-lg-6">
                    
                    <div class="count-bl">
                        <div class="count-bl-item">
                            <div class="count-bl-item__num color-red">1420</div>
                            <div class="count-bl-item__txt">Topshirilgan loyihalar</div>
                        </div>
                        <div class="count-bl-item">
                            <div class="count-bl-item__num color-blue">1210</div>
                            <div class="count-bl-item__txt">Tajribali mutaxassislar</div>
                        </div>
                        <div class="count-bl-item">
                            <div class="count-bl-item__num color-green">750</div>
                            <div class="count-bl-item__txt">Hamkorlar</div>
                        </div>
                        <div class="count-bl-item">
                            <div class="count-bl-item__num color-magenta">2140</div>
                            <div class="count-bl-item__txt">Mamnun mijozlar</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- our-stockks end -->
    @endif
</section>
<!-- about -->