<section class="avantage">
    <div class="container">
        <h3 class="block-title">Bizning afzalliklar</h3>
        <div class="block-slug mb-5">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual</div>

        <div class="row">
            @foreach ($features as $feature)
            <div class="col-lg-3 col-md-4 col-12 avantage-item">
                <a href=" @if($feature['body_'.\App::getLocale()]!='') {{ route('viewFeature', $feature->slug) }} @else # @endif " class="avantage-item-wr">
                    <div class="avantage-item__img">
                        <img src="/admin/images/{{ $feature->icon }}" alt="av pic 1">
                    </div>
                    <div class="avantage-item__tit">
                        {{ $feature['title_'.\App::getLocale()] }}
                    </div>
                    <div class="avantage-item__txt">
                        {{ $feature['desc_'.\App::getLocale()] }}
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>

    </div>
</section>
<!-- avantage section end -->