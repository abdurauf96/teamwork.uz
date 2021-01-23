<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="{$page article-author}">
	<meta name="keywords" content="{$page keywords}">
	<meta name="description" content="{$page.description|escape}">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="max-age=31536000, must-revalidate">
    <meta name="HandheldFriendly" content="True">
    <meta http-equiv="cleartype" content="on">
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Teamwork</title>
	
	<link rel="stylesheet" type="text/css" href="/css/plugins.css">
	<link rel="shortcut icon" href="/img/logo.svg" type="image/x-icon">
	<!-- my styles -->
	<link rel="stylesheet" type="text/css" href="/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="css/fonts.css" rel="stylesheet">

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
							<span><img src="img/logo.svg" alt=""></span>
							Teamwork.uz {{ \App::getLocale() }}
						</a>	
					</div>
	
					<div class="col-auto ml-auto d-md-block d-none">
						<nav class="header-nav">
							<ul>
								<li><a href="servises.html">Xizmatlar</a></li>
								<li><a href="partfolio.html">Portfolio</a></li>
								<li><a href="about.html">Biz haqimizda</a></li>
								<li><a href="reviews.html">Sharhlar</a></li>
								<li><a href="contacts.html">Bog'lanish</a></li>
							</ul>
						</nav>				
					</div>
	
					<div class="col-auto lang-wrap ml-auto ml-sm-0">
						<div class="lang">
							<div class="lang-sel">Eng</div>
							<div class="lang-drop">
								<a href="#">Rus</a>
								<a href="#">O'zbek</a>
							</div>
						</div>	
					</div>
	
					<div class="col-auto text-right">
						<a href="#modalCallback" data-toggle="modal" data-target="#modalCallback" class="start-btn bordered d-none d-sm-inline-block">
							Loyihani boshlash
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
						<div class="header-slug" data-aos="fade-right" data-aos-duration="500">Zamonaviy loyihalar</div>
						<h1 class="header-title" data-aos="fade-right" data-aos-duration="800">Teamwork.uz</h1>
						<p class="header-txt" data-aos="fade-right" data-aos-duration="1000">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account.</p>
					</div>
					<div class="col-lg-6 col-md-4 col-12 order-0 order-md-1">
						<div class="header-image" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500" >
							<img src="img/Header-image.png" alt="header" class="img-responsive">
						</div>
					</div>
					<div class="col-lg-1 col-md-1 col-12 order-2 align-self-baseline" data-aos="fade-up" data-aos-duration="500">
						<div>
							<div class="social" data-aos="fade-up" data-aos-duration="500">
								<a href="#" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
								<a href="#" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram-plane"></i></a>
								<a href="#" data-toggle="tooltip" title="facebook"><i class="fab fa-facebook-f"></i></a>
							</div>	
						</div>
						<div class="btn-slide" >
							<a href="#about">YUQORIGA KO'TARING <span></span></a>
						</div>
						
					</div>
				</div>
			</div>
        </div>
        @else
        <div class="header-center">
			<div class="container text-center">
				<div class="header-p-title">Biz haqimizda</div>
				<div class="content-breadcrump">
					<ul class="content-breadcrump__bl">
						<li class=""><a href="index.html">Asosiy</a></li>
						<li class="active">Biz haqimizda</li>
					</ul>
				</div>
			</div>
		</div>
        @endif
	
	</header>
	<!-- mobile menu -->
	<div class="st-nav">
		<button class="st-nav--close ml-auto">
			<i class="fas fa-times"></i>
		</button>
		<nav class="mobile-nav">
			<ul>
				<li><a href="servises.html">Xizmatlar</a></li>
				<li><a href="partfolio.html">Portfolio</a></li>
				<li><a href="about.html">Biz haqimizda</a></li>
				<li><a href="reviews.html">Sharhlar</a></li>
				<li><a href="contacts.html">Bog'lanish</a></li>
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
						<div class="fot-top__title">Biz haqimizda</div>
						<p class="about-p">Biz buyurtmachilarning muammolarini tezlikni, xavfsizlikni, narx va sifatga qulaylikni yaratamiz</p>
						<a href="#" class="logo-fot"><img src="img/logo-fot.svg" alt="teamwork logo"></a>
	
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">Foydali havolalar</div>
						<ul class="fot-top-list">
							<li><a href="service.html">Xizmatlar</a></li>
							<li><a href="partfolio.html">Portfolio</a></li>
							<li><a href="about.html">Biz haqimizda</a></li>
							<li><a href="contact.html">Aloqa</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">Xizmatlar</div>
						<ul class="fot-top-list">
							<li><a href="web.html">Web dizayn</a></li>
							<li><a href="mobil.html">Mobil ilovalar</a></li>
							<li><a href="grafic.html">Grafik dizayn</a></li>
							<li><a href="brandbook.html">Brandbook</a></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-12 mb-4" data-aos="fade-up" data-aos-duration="300">
						<div class="fot-top__title">Kontaktlar</div>
						<ul class="fot-top-list fot-top-list--contact">
							<li><a href="https://goo.gl/maps/ijkUQ5VHwTgZan4n6">Toshkent shahri, Yunusobod tumani Amir Temur ko'chasi 108 </a></li>
							<li><a href="tel:998907800660">+998 (90) 780 06 60</a></li>
							<li><a href="tel:998907800660">+998 (90) 780 06 60</a></li>
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
						<a href="#" class="copyright">© Teamwork.uz 2020 - 2021. Barcha huquqlar himoyalangan</a>
					</div>
					<div class="col-md-6 col-12 text-md-right text-center mb-3" data-aos="fade-left" data-aos-duration="300">
						<div class="fot-social">
							<a href="#" data-toggle="tooltip" title="instagram"><i class="fab fa-instagram"></i></a>
							<a href="#" data-toggle="tooltip" title="telegram"><i class="fab fa-telegram-plane"></i></a>
							<a href="#" data-toggle="tooltip" title="facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="#" data-toggle="tooltip" title="tiktok"><img src="img/tiktok-brands.svg" alt=""></a>
							<a href="#" data-toggle="tooltip" title="youtube"><i class="fab fa-youtube"></i></a>
							<a href="#" data-toggle="tooltip" title="wk"><i class="fab fa-vk"></i></a>
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
	            <img src="img/success.svg" alt="">
	          </div>
	           <div class="cal-mod__title">
	             Xabaringiz jo'natildi!
	          </div>
	          <div class="cal-mod__txt mb-4">
	            Tez orada bizning mutaxassislarimiz siz bilan
	bog'lanishadi
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
	            <img src="img/form-project-icon.svg" alt="">
	          </div>
	          <div class="cal-mod__title">
	             Ma'lumotlaringizni kiriting
	          </div>
	          <div class="cal-mod__txt">
	             Loyihani boshlash uchun ma'lumotlaringizni kiriting
	          </div>
	
	          <form action="#" class="mt-3">
	            <div class="row">
	              <div class="col-12 col-md-6 mb-3">
	                <input type="text" placeholder="Ism">
	              </div>
	              <div class="col-12 col-md-6 mb-3">
	                <input type="text" placeholder="Telefon">
	              </div>
	              <div class="col-12 mb-3">
	                <input type="text" placeholder="Email">
	              </div>
	            </div>
	            <button class="btn-submit btn-more" data-toggle="modal" data-target="#modalSucces">Jo'natish </button>
	          </form>
	
	        </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
	<script type="text/javascript" src="/js/multi-countdown.js"></script>
	<script type="text/javascript" src="/js/plugins.js"></script>
	<script type="text/javascript" src="/js/animation.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	</div>
	
	<!-- Developed by  mr.khikmatulloh@mail.ru -->
</body>
</html>