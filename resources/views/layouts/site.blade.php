<!DOCTYPE html>
<html lang="ru">
<head>
	{!! Meta::toHtml() !!}
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="{$page article-author}">
	
	
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="max-age=31536000, must-revalidate">
    <meta name="HandheldFriendly" content="True">
    <meta http-equiv="cleartype" content="on">
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link rel="stylesheet" type="text/css" href="/css/plugins.css">
	<link rel="shortcut icon" href="/img/logo.svg" type="image/x-icon">
	<!-- my styles -->
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	@livewireStyles
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="/css/fonts.css" rel="stylesheet">

</head>
<body>

<div class="site-wrap @if (Route::currentRouteName()!='main') site-page @endif">
	<div class="dark-bg"></div>
	<header class="header">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-auto">
						<a href="/" class="header__logo logo">
							<span><img src="/img/logo.svg" alt=""></span>
							Teamwork.uz 
						</a>	
					</div>
	
					<div class="col-auto ml-auto d-md-block d-none">
						<nav class="header-nav">
							<ul>
								@foreach ($menus as $item)
									<li><a href="{{ $item->link }}">{{ $item['title_'.\App::getLocale()] }}</a></li>
								@endforeach
							</ul>
						</nav>				
					</div>
	
					<div class="col-auto lang-wrap ml-auto ml-sm-0">
						<div class="lang">
							@if (\App::getLocale()=='uz')
							<div class="lang-sel">O'zbek</div>
							<div class="lang-drop">
								<a href="/locale/ru">Rus</a>
								<a href="/locale/en">Eng</a>
							</div>
							@elseif(\App::getLocale()=='en')
							<div class="lang-sel">Eng</div>
							<div class="lang-drop">
								<a href="/locale/ru">Rus</a>
								<a href="/locale/uz">O'zbek</a>
							</div>
							@else
							<div class="lang-sel">Rus</div>
							<div class="lang-drop">
								<a href="/locale/en">Eng</a>
								<a href="/locale/uz">O'zbek</a>
							</div>
							@endif
							
						</div>	
					</div>
	
					<div class="col-auto text-right">
						<a href="#modalCallback" data-toggle="modal" data-target="#modalCallback" class="start-btn bordered d-none d-sm-inline-block">
							@lang('messages.start')
						</a>
	
						<a href="#" class="ml-3 burger-site">
							<i class="fa fa-bars"></i>
						</a>
					</div>
	
				</div>
			</div>
        </div>
        @if (Route::currentRouteName()=='main')
        <div class="header-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5 col-md-7 col-12 order-1 order-md-0">
						<div class="header-slug" data-aos="fade-right" data-aos-duration="500">{{ $topblok['desc_'.\App::getLocale()]}}</div>
						<h1 class="header-title" data-aos="fade-right" data-aos-duration="800">{{ $topblok['title_'.\App::getLocale()]}}</h1>
						<p class="header-txt" data-aos="fade-right" data-aos-duration="1000">{{ $topblok['body_'.\App::getLocale()]}}</p>
					</div>
					<div class="col-lg-6 col-md-4 col-12 order-0 order-md-1">
						<div class="header-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500" >
							<img src="/admin/images/{{ $topblok->image }}" alt="header" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-1 col-md-1 col-12 order-2 align-self-baseline" data-aos="fade-up" data-aos-duration="500">
						<div>
							<div class="social" data-aos="fade-up" data-aos-duration="500">
								<a href="{{ $link->insta }}" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
								<a href="{{ $link->tg }}" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram-plane"></i></a>
								<a href="{{ $link->fb }}" data-toggle="tooltip" title="facebook"><i class="fab fa-facebook-f"></i></a>
							</div>	
						</div>
						<div class="btn-slide" >
							<a href="#about">@lang('messages.totop') <span></span></a>
						</div>
						
					</div>
				</div>
			</div>
        </div>
        @else
    	@yield('breadcrumb')
        @endif
	
	</header>
	<!-- mobile menu -->
	<div class="st-nav">
		<button class="st-nav--close ml-auto">
			<i class="fas fa-times"></i>
		</button>
		<nav class="mobile-nav">
			<ul>
				@foreach ($menus as $item)
					<li><a href="{{ $item->link }}">{{ $item['title_'.\App::getLocale()] }}</a></li>
				@endforeach
			</ul>
		</nav>	
	
		<a href="#modalCallback" data-toggle="modal" data-target="#modalCallback" class="start-btn bordered mt-4">
			Loyihani boshlash
		</a>
	</div>
	<!-- mobile menu -->
    <!-- /.haeder -->
    

    @yield('content')
    <footer class="fot">
		<div class="fot-top">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">{{ $link['about_title_'.\App::getLocale()] }}</div>
						<p class="about-p">{{ $link['about_desc_'.\App::getLocale()] }}</p>
						<a href="/" class="logo-fot"><img src="/img/logo-fot.svg" alt="teamwork logo"></a>
	
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">@lang('messages.useful')</div>
						<ul class="fot-top-list">
							@foreach ($menus as $menu)
								@if ($menu->footer==1)
								<li><a href="{{ $menu->link }}">{{ $menu['title_'.\App::getLocale()] }}</a></li>
								@endif
							@endforeach
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">@lang('messages.services')</div>
						<ul class="fot-top-list">
							@foreach ($services as $s)
							@if ($s->footer==1)
							<li><a href="{{ route('viewService', $s->slug) }}">{{ $s['name_'.\App::getLocale()] }}</a></li>
							@endif
							@endforeach
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">@lang('messages.contacts')</div>
						<ul class="fot-top-list fot-top-list--contact">
							<li><a href="https://goo.gl/maps/ijkUQ5VHwTgZan4n6">{{ setting('addres_'.\App::getLocale()) }}</a></li>
							<li><a href="tel:{{ setting('phone1')}}">{{ setting('phone1')	 }}</a></li>
							<li><a href="tel:{{ setting('phone2')}}">{{ setting('phone2')	 }}</a></li>
							<li><a href="mailto:info@teamwork.uz">info@teamwork.uz</a></li>
						</ul>
					</div>
				</div>
	
	
			</div>
		</div>
	
		<div class="fot-bot">
			<div class="container">
			<div class="line"></div>	
				
				<div class="row">
					<div class="col-md-6 col-12 text-md-left text-center mb-3" data-aos="fade-right" data-aos-duration="300">
						<a href="#" class="copyright">{{ $link['footer_'.\App::getLocale()] }}</a>
					</div>
					<div class="col-md-6 col-12 text-md-right text-center mb-3" data-aos="fade-left" data-aos-duration="300">
						<div class="fot-social">
							<a href="{{ $link->insta }}" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
							<a href="{{ $link->tg }}" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram-plane"></i></a>
							<a href="{{ $link->fb }}" data-toggle="tooltip" title="facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="{{ $link->tiktok }}" data-toggle="tooltip" title="tiktok"><img src="/img/tiktok-brands.svg" alt=""></a>
							<a href="{{ $link->youtube }}" data-toggle="tooltip" title="youtube"><i class="fab fa-youtube"></i></a>
							<a href="{{ $link->wk }}" data-toggle="tooltip" title="wk"><i class="fab fa-vk"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#top" class="btn-slide-up"><i class="fa fa-arrow-up"></i></a>
	</footer>
	<!-- /.fot -->
	<div class="modal fade" id="modalSucces" tabindex="10" role="dialog" aria-labelledby="modalSuccesLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <div class="cal-mod">
	          <div class="succes-icon">
	            <img src="/img/success.svg" alt="">
	          </div>
	           <div class="cal-mod__title">
	             @lang('messages.sent')
	          </div>
	          <div class="cal-mod__txt mb-4">
	            @lang('messages.sent2')
	          </div>
	        </div>
	    </div>
	  </div>
	</div>
	
	
	<div class="modal fade" id="modalCallback" tabindex="10" role="dialog" aria-labelledby="modalCallbackLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	
	
	        <div class="cal-mod">
	          <div class="succes-icon">
	            <img src="/img/form-project-icon.svg" alt="">
	          </div>
	          <div class="cal-mod__title">
	             @lang('messages.type')
	          </div>
	          <div class="cal-mod__txt">
	             @lang('messages.type2')
	          </div>
	
	          @livewire('project-form')
	
	        </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
	<script type="text/javascript" src="/js/multi-countdown.js"></script>
	<script type="text/javascript" src="/js/plugins.js"></script>
	<script type="text/javascript" src="/js/animation.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	</div>
	@livewireScripts
	<!-- Developed by  mr.khikmatulloh@mail.ru -->
</body>
</html>