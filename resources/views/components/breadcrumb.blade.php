<div class="header-center">
    <div class="container text-center">
        <div class="header-p-title">{{ $active }}</div>
        <div class="content-breadcrump">
            <ul class="content-breadcrump__bl">
                <li class=""><a href="/">Asosiy</a></li>
                @isset($parent)
                {{ $parent }}    
                @endisset 
                <li class="active"> {{ $active }} </li>
            </ul>
        </div>
    </div>
</div>