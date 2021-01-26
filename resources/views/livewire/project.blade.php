<div class="row align-items-end justify-content-between">
    <div class="col-lg-4 col-12">
        <div class="part-hash color-orange mb-3">#PORTFOLIO </div>
        <h3 class="block-title text-left">Bizning loyihalar</h3>
        <p class="color-dark mb-0">Sizda topshiriq bormi? Uni darhol Teamwork.uz ga topshiring</p>
    </div>

    <div class="col-lg-5 col-12">
        <div class="part-tabss d-flex align-items-center justify-content-between">
            <button class="btn-prev"><i class="fa fa-arrow-left"></i></button>
            <div class=" owl-carousel part-tab">
                <a href="#" id="filter-all"  class="part-tab__link">All </a>
                @foreach ($categories as $category)
                <a href="#" id="filter-{{ $category->id }}"  class="part-tab__link">{{ $category['name_'.\App::getLocale()] }}</a>
                @endforeach
                
            </div>
            <button class="btn-next"><i class="fa fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="col-12">
        
        <div class="tb-wrap row" id="tb-wrap">
            @foreach ($projects as $project)
            <div class="col-lg-3 col-md-4 col-6 tb-filter filter-{{ $project->portfolio_category_id }} filter-all">
                <a href="{{ route('viewPortfolio', $project->slug) }}" class="tb-it">
                    <span class="tb-it__img">
                        <img class="lazy" src="/admin/images/{{ $project->image }}" alt="">
                    </span>
                    <span class="tb-it__main magenta-gradient">
                        <b>{{ $project->category['name_'.\App::getLocale()] }}</b>
                        <span>Created by {{ $project->author }}</span>
                    </span>
                </a>
            </div>
            @endforeach 
        </div>

        <a href="/portfolio" class="btn-more m-auto">Barchasi</a>

    </div>
</div>