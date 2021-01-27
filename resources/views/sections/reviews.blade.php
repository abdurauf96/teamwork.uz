<section class="reviews-section @if(Route::currentRouteName()!='main') page-partfolio @endif">
    <div class="container">
        <div class="block-title">Mijozlarimiz fikrlari</div>
        <div class="block-slug">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual</div>

        <div class="mt-5 @if(Route::currentRouteName()=='main') reviews-sl owl-carousel @endif">
            <div class="reviews-wrap">
                @foreach ($reviews as $rev)
                <div class="reviews-item">
                    <a href="@if($rev->link!='') {{ $rev->link }} @endif" data-fancybox="video" class="d-flex">
                        <div class="reviews-item__img">
                            <img src="/admin/images/{{ $rev->image }}" alt="">
                            @if($rev->link!='') <span class="play-btn"></span> @endif
                        </div>
                        <div>
                            <div class="reviews-item__name">{{ $rev['name_'.\App::getLocale()] }}</div>
                            <div class="reviews-item__pos">{{ $rev['profession_'.\App::getLocale()] }}</div>
                            <ul class="reviews-item-star-list" data-star="{{ $rev->star }}">
                                <li class="reviews-item-star-list__item"></li>
                                <li class="reviews-item-star-list__item"></li>
                                <li class="reviews-item-star-list__item"></li>
                                <li class="reviews-item-star-list__item"></li>
                                <li class="reviews-item-star-list__item"></li>
                            </ul>
                        </div>
                    </a>
                    <div class="mt-3 reviews-item__txt">
                        {{ $rev['desc_'.\App::getLocale()] }}
                    </div>
                </div>
                @endforeach
                

                <!-- there must be only 8 items -->
            </div>
          
            <!-- reviews-wr end  -->
        </div>

    </div>
</section>
<!-- our team section end -->