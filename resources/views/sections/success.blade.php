<section class="our-stockks">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="fr">
                    <div class="block-title text-left">{{ $blokabout['title_'.\App::getLocale()] }} </div>
                    <div class="block-slug text-left">{{ $blokabout['desc_'.\App::getLocale()] }}</div>
                </div>

                <div class="progress-block mt--5 mb-5">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="progress-name">{{ $blokabout['result1_'.\App::getLocale()] }}</div>
                        <div class="progress-pros"><span>{{ $blokabout['value1'] }}</span>%</div>	
                    </div>
                    <div class="progress">
                      <div class="progress-bar blue-gradient" role="progressbar"  aria-valuenow="{{ $blokabout['value1'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress-block mb-5">
                    <div class="d-flex justify-content-between mb-2">
                        <div class="progress-name">{{ $blokabout['result2_'.\App::getLocale()] }}</div>
                        <div class="progress-pros"><span>{{ $blokabout['value2'] }}</span>%</div>	
                    </div>
                    <div class="progress">
                      <div class="progress-bar red-gradient" role="progressbar" aria-valuenow="{{ $blokabout['value2'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>


            </div>

            <div class="col-lg-6">
                
                <div class="cnt">
                    @foreach ($numbers as $num)
                    <div class="cnt-item">
                        <div class="cnt-item__num">{{ $num->number }}</div>
                        <div class="cnt-item__name">{{ $num['title_'.\App::getLocale()] }}</div>
                    </div>
                    @endforeach
                    

                    <div class="cnt--diz"></div>
                    <div class="cnt--diz1"></div>
                    <div class="cnt--diz2"></div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- our-stockks end -->