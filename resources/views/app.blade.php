<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('aimeos_header')
	<title>Aimeos on Laravel</title>
  <link href="{{asset('css/all1.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all3.css')}}" rel="stylesheet" />
  <link href="{{asset('css/all4.css')}}" rel="stylesheet" />
  
	<link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style>
		/* Theme: Black&White */
		/* body {
			--ai-primary: #000; --ai-primary-light: #000; --ai-primary-alt: #fff;
			--ai-bg: #fff; --ai-bg-light: #fff; --ai-bg-alt: #000;
			--ai-secondary: #555; --ai-light: #D0D0D0;
		} */
		body { color: #000; color: var(--ai-primary, #000); background-color: #fff; background-color: var(--ai-bg, #fff); }
		.navbar, footer { color: #555; color: var(--ai-primary-alt, #555); background-color: #f8f8f8; background-color: var(--ai-bg-alt, #f8f8f8); }
		.navbar a, .navbar a:before, .navbar span, footer a { color: #555 !important; color: var(--ai-primary-alt, #555) !important; }
		.sm:before { font: normal normal normal 14px/1 FontAwesome; padding: 0 0.2em; font-size: 225% }
		.facebook:before { content: "\f082" } .twitter:before { content: "\f081" } .instagram:before { content: "\f16d" } .youtube:before { content: "\f167" }
	</style>
	@yield('aimeos_styles')
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-light mb-5">
	<a class="navbar-brand" href="/">
	<img style="width: 110px;
                           height: 90px;
                           right:  20px;" src="{{asset('image/1.PNG')}}" alt="">
		</a>
		
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
    </button>
    
<!-- Contact starts -->
<div class="tb-contact pull-left">
				<!-- Email -->
				<i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">info@senegaldev-it.com</a>
				&nbsp;&nbsp;<br>
				<!-- Phone -->
				<i class="fa fa-phone color"></i> &nbsp;Appeler pour commander: +221 77 288 18 18
			</div>
			<!-- Contact ends -->

		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				@if (Auth::guest())
					<li class="nav-item"><a class="nav-link" href="/login">CONNEXION</a></li>
					<li class="nav-item"><a class="nav-link" href="/register">INSCRIPTION</a></li>
				@else
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="nav-link" href="{{ route('aimeos_shop_account',['site'=>Route::current()->parameter('site','default'),'locale'=>Route::current()->parameter('locale','en'),'currency'=>Route::current()->parameter('currency','FCFA')]) }}" title="Profile">Profile</a></li>
							<li><form id="logout" action="/logout" method="POST">{{csrf_field()}}</form><a class="nav-link" href="javascript: document.getElementById('logout').submit();">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
			@yield('aimeos_head')
		</div>
	</nav>
	
	<header class="">
  <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand"  style="color : green;
    "  href="index.html">
    <h2 style="color : green;">
" L'idéal c'est Marche Dior Online"</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.html">Products</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
	  </header><br>
	<div >

	<div class="banner header-text">
      <div class="owl-banner owl-carousel">
        
	  
		<div class="banner-item-03" style=" background-image:url('{{ asset('image/4.jpg')}}' ) ;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		width: 100%;
    height: 50;
	margin: 10;
	display : block;
    " >
		
        <div class="text-content">
		<div class="marquee-rtl">
			<h4>Faites vos courses sans vous deplacez</h4>
		</div>
            <h2>
" Partenaire des professionnels "
</h2>
          </div>
		</div>

		
		
      </div>
  </div>

  

      <!-- Hero Section Begin -->
      <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span></span>
                        </div>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                               
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>


                    <div class="slideshow">
<ul>
<li><img src="{{ asset('image/5.jpg')}}" alt>  <span  class="hero__text">votre supermarche chez vous</span>
<h2 style=" position: absolute;
color: rgba(0,2,5,3.7);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">Faites votre marche mensuel</h2>
                             
<li><img src="{{ asset('image/banner.jpg')}}" alt>  <span  class="hero__text">FRUIT FRESH</span>
                            <h2 style=" position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">Vegetable <br />100% Organic</h2>
     </li>
<li><img src="{{ asset('image/6.jpg')}}" alt>
<span  class="hero__text">FRUIT FRESH</span>
<h2 style=" position: absolute;
color: rgba(0,2,7,4.7);
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);"><em>Le meilleur de l'electronique</em></h2>
  </li>                         
<li><img src="{{ asset('image/8.jpg')}}" alt> <span  class="hero__text"></span>
<h2 style=" position: absolute;
color:blue;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);">votre boutique de pret a porter au meilleur prix</h2>
                           </li>

</ul>
<div class="barre_progression"></div>
</div>














                    
                </div>
            </div>
        </div>
    </section>


       
 
		@yield('aimeos_nav')
		@yield('aimeos_stage')
		@yield('aimeos_body')
		@yield('aimeos_aside')
		@yield('content')
  </div><br>
  
   <!-- Categories Section Begin -->
   <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
   


	<footer sytle=" background-color: blue;" class="ftco-footer ftco-section">
      <div class="container" sytle=" background-color:  rgb(192, 192, 192);">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><strong>Senegal Dev-it</strong></h2>
              <p><span class="icon-long-arrow-right mr-2"></span>Des proffessionnels pour vous servir </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
              <img style="width: 160px;
                           height: 140px;" src="{{asset('image/1.PNG')}}" alt="">
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2"><strong>Service client</strong></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Nous Contacter</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>methode de paiement</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>methode de livraison</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Politiques de retour</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><strong>Apropos de Marche Dior</strong></h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qui sommes nous</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Conditions d'utilisation</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>politiques de confidentialites</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Proprietes intellectuelle</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Carriere</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2"><strong>Nous contacter</strong></h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Parcelles Assainies ,Dakar Senegal</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@senegaldev-it.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ce site est developpe  <i class="icon-heart color-danger" aria-hidden="true"></i> par <a href="https://senegaldev-it.sn" target="_blank">Senegal Dev-it</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<script src="assets/js1/jquery.min.js"></script>
    <script src="assets/js1/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js1/custom.js"></script>
    <script src="assets/js1/jquery-3.3.1.min.js"></script>
    <script src="assets/js3/bootstrap.min.js"></script>
    <script src="assets/js3/jquery.nice-select.min.js"></script>
    <script src="assets/js3/jquery-ui.min.js"></script>
    <script src="assets/js3/jquery.slicknav.js"></script>
    <script src="assets/js3/mixitup.min.js"></script>
    <script src="assets/js3/owl.carousel.min.js"></script>
    <script src="assets/js3/main.js"></script>
  @yield('aimeos_scripts')
  
	</body>
</html>


