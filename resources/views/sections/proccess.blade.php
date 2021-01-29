<section class="ishlash-oson">
    <div class="container">
        <div class="block-title">{{ $blokprocces['title_'.\App::getLocale()] }}</div>
        <div class="block-slug">{{ $blokprocces['desc_'.\App::getLocale()] }}</div>

        <div class="ishlash-wrap">
            <div class="row justify-content-between">
                <div class="col-md-4  col-12 order-0 order-md-0 ishlash-item--left">
                @foreach ($proccesses as $proc)
                    <div class="ishlash-item" data-aos="fade-up" data-aos-duration="200">
                        <div class="ishlash-item__count ishlash-item__count--magenta">{{ $loop->iteration }}</div>
                        <div class="ishlash-item__txt">{{ $proc['title_'.\App::getLocale()] }}</div>
                    </div>
                    @if ($loop->iteration==3)
                    </div>
                    <div class="col-md-4 col-12 order-2 order-md-1 text-center">
                        <img src="/admin/images/{{ $blokprocces['image'] }}" alt="#" class="man-image">
                        <div class="ishlash-bot">
                            <img src="img/payment-method.svg" alt="">
                            <div class="ishlash-bot__txt">@lang('messages.procces_text')</div>
                        </div>
                    </div>
                    <div class="col-md-4  col-12 order-1 order-md-2 ishlash-item--right">
                    @endif
                @endforeach
                    </div>  
            </div>
            
        </div>


    </div>
</section>
<!-- our team section end -->