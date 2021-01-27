<section class="pratners">
    <div class="container">
        <div class="block-title">Hamkorlarimiz</div>
        <div class="block-slug">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual</div>

        <div class="mt-5 partner-sl owl-carousel">
            @foreach ($partners as $partner)
            @if($partner->link!='')
            <a href="{{ $partner->link }}" target="_blank" class="partner-item">
            @else
            <a href="#" class="partner-item">
            @endif
                <img class="lazy" data-src="/admin/images/{{ $partner->logo }}" alt="partner 1">
            </a>
            @endforeach
        </div>

    </div>
</section>
<!-- our team section end -->