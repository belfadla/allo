<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Allo Tapis El Jadida</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('tapis.ico')}}">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/ionicons.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet" type="text/css">
		<link href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" rel="stylesheet">
       <!--Main Slider-->
		<link href="{{asset('assets/css/settings.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/layers.css')}}" type="text/css" rel="stylesheet" media="screen">
	
		<link href="{{asset('assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen">
		<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('assets/css/header1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/footer1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/index1.css')}}" rel="stylesheet" type="text/css" />
	
		<link href="{{asset('assets/css/index.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/css/theme-color/default.css')}}" rel="stylesheet" type="text/css" id="theme-color" />

<style>.pricing-table-wrap .card{border:0;-webkit-box-shadow:0 0 48px rgba(0,0,0,.2);box-shadow:0 0 48px rgba(0,0,0,.2)}.pricing-table-wrap .btn{padding-left:30px;padding-right:30px}.pricing-table-wrap .list-group-flush .list-group-item{background:0 0}.pricing-card{text-align:center}.pricing-card .price-title,.pricing-card .pricing-icon{padding-bottom:30px;text-align:center}.pricing-card .pricing-icon img{margin-top:-30px}.pricing-card .price-title{text-transform:uppercase;font-size:16px;font-weight:500;color:#0092ff;letter-spacing:.15em}.pricing-card .pricing-price{font-size:60px;line-height:1;font-weight:400;padding-bottom:40px;padding-top:20px;color:#0092ff}.pricing-card .pricing-price sub{font-size:16px;font-weight:400;color:#fd486e}.pricing-card .pricing-price sup{font-size:20px;font-weight:400;color:#fd486e;top:10px;vertical-align:top}.pricing-card .text{padding-bottom:30px}.pricing-card .cta{max-width:170px;margin:0 auto;-webkit-transform:translate(0,50%);transform:translate(0,50%)}.pricing-card .cta .btn{display:block;text-align:center}.pricing-card-style2,.profile-setting .profile-edit-list>li{padding:20px}.pricing-card-style2 .pricing-card-header{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-bottom:15px;border-bottom:2px solid #f0f2f7}.pricing-card-style2 .pricing-card-header .left{width:70%}.pricing-card-style2 .pricing-card-header .left h5{color:#0092ff;font-size:18px;font-weight:700}.pricing-card-style2 .pricing-card-header .left p,.pricing-points ul li{font-size:14px;font-weight:500;margin-bottom:0}.pricing-card-style2 .pricing-card-header .right{width:40%;text-align:right;color:#000;font-size:18px;line-height:1.4;font-weight:700}.pricing-card-style2 .pricing-card-header .right span{display:block;font-size:12px}.pricing-card-style2 .pricing-card-body{padding-top:30px;padding-bottom:10px}.pricing-points ul li{padding:0 30px 0 0;margin-bottom:20px;color:#000;position:relative}.pricing-points ul li:after{content:"\f121";font-family:Ionicons;font-size:18px;line-height:1;color:#0092ff;position:absolute;right:0;top:0}.pricing-card-style2 .cta{max-width:170px;margin:0 auto;padding-top:10px;padding-bottom:20px}.pricing-card-style2 .cta .btn{display:block;text-align:center}.profile-photo{width:160px;height:160px;margin:0 auto 15px;position:relative}.profile-photo .edit-avatar{position:absolute;right:-15px;top:0;width:30px;height:30px;line-height:30px;font-size:14px;text-align:center;-webkit-box-shadow:0 2px 4px rgba(0,0,0,.4);box-shadow:0 2px 4px rgba(0,0,0,.4)}.contact-directory-box .contact-avatar span img,.profile-photo .avatar-photo,.profile-photo .edit-avatar{border-radius:100%}.profile-info,.profile-skills,.profile-social{border-top:2px dashed #ecf0f4;padding:15px}.profile-info ul li{margin-bottom:15px;font-size:14px;font-weight:500;word-wrap:break-word}
.card-box {
  border: 1px solid #dadada;
  box-shadow:  #0092ff;
 
  border-radius: 10px;
  background-color:#F8F8F8;
}
	.card-box:hover{ 
     box-shadow: 1px 8px 20px #0092ff;
    -webkit-transition:  box-shadow .6s ease-in;
  }
  
  .navigation a:hover, .navigation a:active {font-size: 100%;}
</style>
    </head>
    <body class="antialiased">
       		<!--loader-->
			   <div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>

		     <!--loader-->

		<!-- HEADER -->
		<header id="header" class="header header-1 header_tran">
			<div id="top-bar" class="top-bar-section top-bar-bg-color">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="top_loction pull-left">
								<ul>
								
									<li>
									<a href="https://goo.gl/maps/EVe1SZKag9fhpvwYA" target="_blank"><i class="fa fa-map-marker"></i> Rue 3 N 4 Hay Riyad El Jadida</a>
									&nbsp;&nbsp;
									<a href="mailto:Teamglobalwork@gmail.com"><i class="fa fa-envelope"></i>Teamglobalwork@gmail.com</a>
									&nbsp;&nbsp;		
									<a href="tel:0661579024"><i class="fa fa-phone"></i>+(212)661579024/600604654</a>

									</li>
								
								</ul>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="top-social-icon icons-hover-black">
								<div class="icons-hover-black">
									<a href="https://www.facebook.com/allotapiseljadida" target="_blank"> <i class="fa fa-facebook"></i> </a>
									<a href="https://shorturl.at/luvQ1"> <i class="fa fa-whatsapp"></i> </a>
									<a href="https://m.youtube.com/channel/UCRNccnslWQYTGbXG3nO3RQw" target="_blank"> <i class="fa fa-youtube-play"></i> </a>
									@if (Route::has('login'))
               
                    @auth
                        @if(Auth::user()->type ==='admin')
                            <a href="{{ route('admin.dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                        @else
						<a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>{{ Auth::user()->name }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
									</form>                      
									  @endif
                       @else
                        <a href="{{ route('login') }}" ><i class="fa fa-sign-in"></i></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" ><i class="fa fa-user-plus"></i></a>
                        @endif
                    @endif
         
            @endif
									

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="nav-wrap">
				<div class="reletiv_box">
					<div class="container">
						<div class="row d-flex align-items-center">
							<div class="col-md-3">
								<div class="logo">
									<a href="{{url('/')}}"><img src="{{asset('assets/images/allologo.png')}}" alt=""></a>
								</div>
								<!-- Phone Menu button -->
								<button id="menu" class="menu hidden-md-up"></button>
							</div>
							<div class="col-md-9 nav-bg">
								<nav class="navigation">
									<ul>
							<li>
								<a href="{{url('/')}}">Acceuil</a>
								<i class="ion-ios-plus-empty hidden-md-up"></i>
							
							</li>
							<li>
								<a href="{{url('/aproposnous')}}">A propos Nous</a>
								<i class="ion-ios-plus-empty hidden-md-up"></i>
								
							</li>
							
							<li>
									<a href="javascript:avoid(0);">Services</a>
									<i class="ion-ios-plus-empty hidden-md-up"></i>
									<ul class="sub-nav">
										<li>
											<a href="{{url('/ToutLesServices')}}">Tous les services</a>
										</li>
										@foreach($list as $ls)
										<?php $query=DB::table('details')->select('*')->where(['service_id'=>$ls->id,'status'=>1])->get();
									
										?>
										<?php if(isset($query) && count($query) > 0){?>
												<li class="sub-menu" >
													<a  href="javascript:avoid(0);">{{$ls->name}}</a>
														<i class="ion-ios-plus-empty hidden-md-up"></i>
														<ul class="sub-nav sub-menu" >
														<?php foreach($query as $link){ ?>
															<li><a style="background-color:#0275d8;" href="{{url('/details/'.$link->id)}}">{{$link->name}}</a></li>
													<?php } ?>						
														</ul>										        	
												</li>
												<?php } else{?>
													<li>
												<a href="{{url('/detailservice/'.$ls->id)}}">{{$ls->name}}</a>
										        	</li>
												<?php 	}?>
									     @endforeach 
										
										
										
									
									</ul>
							</li>
						
						

							<li>
								<a href="{{url('/tarifs')}}">Tarifs</a>
								<i class="ion-ios-plus-empty hidden-md-up"></i>
							
							</li>

							<li>
								<a href="{{url('/temoignage')}}">Témoignages</a>
								<i class="ion-ios-plus-empty hidden-md-up"></i>
							
							</li>
						
							<li>
								<a href="{{url('/contacteznous')}}">Contactez Nous</a>
								<i class="ion-ios-plus-empty hidden-md-up"></i>
								
							</li>
						</ul>

								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER -->

		@include('sweetalert::alert')


		@yield('content')

		<!-- Footer -->
		<footer>
			<div class="top_footer_info__block ptb-20">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-phone"></i>
								<h4>+(212)661579024/+(212)600604654 <span>Lundi-Samedi, 08:00-19:00</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-envelope-o"></i>
								<h4>Teamglobalwork@gmail.com <span>Lundi-Samedi, 08:00-19:00</span></h4>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single_info__block">
								<i class="fa fa-bullhorn"></i>
								<h4>Demander un devis<span>Obtenir toutes les informations</span></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_footer__block pb-0 pt-60">
				<div class="container">
					<div class="row">
						
						
						<div class="col-md-4 mt-xs-30 mt-sm-30">
							<div class="footer_box__block">
								<h4>Informations</h4>
								<ul>
									<li>
										<a href="{{url('/tarifs')}}">Tarifs</a>
									</li>
									<li>
										<a href="{{url('/temoignage')}}">Témoignages</a>
									</li>
									<li>
										<a href="{{url('/ToutLesServices')}}">Services</a>
									</li>
									<li>
										<a href="{{url('/aproposnous')}}">A propos Nous</a>
									</li>
									<li>
										<a href="{{url('/contacteznous')}}">Contactez Nous</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 mt-sm-30 mt-xs-30">
							<div class="footer_box__block address-box">
								<h4>Contact Info</h4>
								<ul>
									<li>
										<i class="fa fa-phone"></i>
										<p>
											Contactez Nous Sur :   <br>+(212)661579024  <br> +(212)600604654
										</p>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i>
										<p>
											<a href="Teamglobalwork@gmail.com">Teamglobalwork@gmail.com</a>
										</p>
									</li>
									<li>
										<i class="fa fa-map-marker"></i>
										<p>
										Rue 3 N 4 Hay Riyad  Juste à côté De La Pharmacie IBN Rochd El Jadida
										</p>
									</li>
									<li>
										<i class="fa fa-clock-o"></i>
										<p>
										Lundi-Samedi, 08:00-19:00
											<br>
										
										</p>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 footer-subscribe">
						<div class="footer_box__block">
							<h4>INSCRIPTION À LA NEWSLETTER</h4>
						<p>
						En vous abonnant à notre liste de diffusion, vous serez toujours à jour avec les dernières nouvelles de nous.						</p>
						<form action="{{route('store')}}" method="post">
@csrf
							<input type="email" name="email" placeholder="E-mail" required>
							<button class="btn-text">
							Rejoignez Nous 
							</button>
						</form>
							</div>
						</div>
					</div>
					<div class="copyriight_block ptb-20 mt-20">
						<div class="row">
							<div class="col-sm-6">
								<a href="{{url('/')}}" class="footer__block-logo"><img src="{{asset('assets/images/allologo.png')}}" alt=""></a>
							</div>
							<div class="col-sm-6 text-right">
								<p>
								
Tous les droits sont réservés
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>
        <!-- Footer_End -->
        	<!-- Site Wraper End -->
		<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/js/jquery.easing.js')}}" Defer type="text/javascript"></script>

		<!-- fancybox Js -->
		<script src="{{asset('assets/js/jquery.mousewheel-3.0.6.pack.js')}}" Defer type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}" Defer type="text/javascript"></script>
		<!-- popup -->
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}" Defer type="text/javascript"></script>

		<!-- carousel Js -->
		<script src="{{asset('assets/js/owl.carousel.js')}}" type="text/javascript"></script>

		<!-- imagesloaded Js -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"  Defer type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
	
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}" Defer type="text/javascript"></script>
		<script src="{{asset('assets/js/masonry.pkgd.min.js')}}" Defer type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.appear.js')}}" Defer type="text/javascript"></script>
		<!-- Mail Function Js -->
		<script src="{{asset('assets/js/mail.js')}}" Defer type="text/javascript"></script>

		<!-- revolution Js -->
		<script type="text/javascript" Defer src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" Defer src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
	
		<script type="text/javascript" Defer src="{{asset('assets/js/jquery.revolution.js')}}"></script>
		<!-- custom Js -->
		<script src="{{asset('assets/js/custom1.js')}}"  Defer type="text/javascript"></script>

	<!-- GetButton.io widget -->
<!-- GetButton.io widget -->

<!-- GetButton.io widget -->
<script type="text/javascript">

    (function () {
        var options = {
            facebook: "234726833708153", // Facebook page ID
            whatsapp: "+212661579024", // WhatsApp number
            call_to_action: "Contactez-Nous", // Call to action
            button_color: "#0092ff", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!-- /GetButton.io widget -->
    </body>



