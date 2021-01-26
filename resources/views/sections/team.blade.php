<section class="ourteam">
    <div class="container">
        <div class="block-title">Bizning jamoa</div>
        <div class="block-slug">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I  will give you a complete account of the system, and expound the actual</div>

        <div class="ourteam-sl owl-carousel">
            @foreach ($personals as $personal)
            <div class="ourteam-item">
                <div class="ourteam-item__img">
                    <img src="/admin/images/{{ $personal->image }}" alt="team 1">
                </div>
                <div class="ourteam-item__main">
                    <div class="ourteam-item__tit">{{ $personal['name_'.\App::getLocale()] }}</div>
                    <div class="ourteam-item__position">{{ $personal['profession_'.\App::getLocale()] }}</div>
                    <div class="ourteam-item__txt">{{ $personal['about_'.\App::getLocale()] }}</div>
                    <div class="ourteam-item__social">
                        <a href="{{ $personal->insta }}" data-toggle="tooltip" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $personal->tg }}" data-toggle="tooltip" title="telegram" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                        <a href="{{ $personal->fb }}" data-toggle="tooltip" title="facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="ourteam-item__litInfo">
                    <div class="ourteam-item__tit">{{ $personal['name_'.\App::getLocale()] }}</div>
                    <div class="ourteam-item__position">{{ $personal['profession_'.\App::getLocale()] }}</div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- our team section end -->