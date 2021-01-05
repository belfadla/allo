@extends('index')
@section('content')   
        	<!--  Main Banner Start Here-->
		<div class="main-banner banner_up">
			<div id="rev_slider_34_1_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_34_1" class="rev_slider" data-version="5.0.7" >
					<ul>
					@foreach($slider as $ls)
						<!-- SLIDE  -->
						<li data-index="rs-{{$ls->id}}">
							<!-- MAIN IMAGE -->
							<img style="max-width:100%; height:auto;" src="{{ asset('/'.$ls->image) }}"  alt=""   class="rev-slidebg " >
							<!-- LAYERS -->
							<!-- LAYER NR. 2 -->
							<div class="tp-caption Newspaper-Title   tp-resizeme "
							id="slide-{{$ls->id}}-layer-1"
							data-x="['left','left','left','left']" data-hoffset="['100','50','50','30']"
							data-y="['top','top','top','center']" data-voffset="['230','135','50','0']"
							data-fontsize="['50','50','50','30']"
							data-lineheight="['55','55','55','35']"
							data-width="['700','700','700','420']"
							data-max-height="['400', '768','960','720']"
							data-height="none" 
							data-whitespace="normal"
							data-transform_idle="o:1;"
							data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
							data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
							data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
							data-mask_out="x:0;y:0;s:inherit;e:inherit;"
							data-start="1000"
							data-splitin="none"
							data-splitout="none"
							data-responsive_offset="on" >
								<div class="banner-text" >
									<h2>{{$ls->name}}</h2>
									<p>
									{{$ls->description}}
									</p>
									
									<a class="btn-text" href="{{url('/ToutLesServices')}}">Decouvrir Nos Services</a>
								</div>
								
							</div>
						</li>
						@endforeach
						<!-- SLIDE  -->
					</ul>
					<div class="tp-bannertimer tp-bottom"></div>
				</div>
			</div>
		</div>
		<!--  Main Banner End Here-->
        <!-- How_it_Work -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Comment Ça Marche</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>

				<div class="row mt-30 mt-xs-0">
					<div class="col-lg-3 col-md-6">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="assets/images/cleaning-lady.svg" alt="" height="50" width="50" />
								<h3>Expert</h3>
								
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="assets/images/cleaner.svg" alt="" height="50" width="50" />
								<h3>Services Sécurisés</h3>
								
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-sm-30">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="assets/images/clean.svg" alt="" height="50" width="50" />
								<h3>À Petit Prix</h3>
								
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 mt-sm-30">
						<div class="clean_top mb-xs-30 feature-box">
							<div class="content">
								<img src="assets/images/clean-1.svg" alt="" height="50" width="50" />
								<h3>À Temps</h3>
								
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- How_it_Work_End -->

		<!-- Section -->
		<section class="padding ptb-xs-40 bg_contact light-color">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center call_headding">
						<h3>Vous recherchez un nettoyeur professionnel pour votre propriété?</h3>
						<div class="contact_info mt-30">
							<span class="call-us"><i class="ion-ios-telephone-outline"></i>Appelez nous:  +(212)661579024 </span><span>Ou</span>
							<a class="btn btn-text" href="{{url('/contacteznous')}}">Contactez Nous</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section_End -->

		<!-- Popular_Service_Section -->
		<section class="padding ptb-xs-40 gray-bg">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Nos Services</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>

				<div class="row">
				
					<div class="col-md-12">
						<div class="slider_cours">
						@foreach($list as $ls)
							<div class="courses_popular" style="border: 1px solid #dedede;">
								<div class="top_cours">
									<figure >
									<img  src="{{ asset('/'.$ls->image) }}" />
									</figure>
									<div class="apply_box d-flex align-items-center">
										<div class="full_width">
											<a href="{{url('/detailservice/'.$ls->id)}}" class="btn-text">Lire la suite</a>
										</div>
									</div>
								</div>
								<div class="courses_detail">
							<h3><a href="{{url('/detailservice/'.$ls->id)}}">{{$ls->name}}</a></h3>
									<p  >
									{!!strip_tags(Illuminate\Support\Str::limit($ls->description, 50))!!}
									</p>
									
								</div>
							</div>
	
							@endforeach 
						</div>
					</div>
					
				</div>

			</div>
		</section>
		<!-- Popular_Service_Section_End -->

		<!--Video Sec-->
		<section class="padding ptb-xs-40 video_sec">
			<div class="opacity-extra-medium bg-black"></div>
			<div class="container position-relative">
				<div class="row">
				    @if(!empty($video->link))
				    	<div class="col-lg-6 col-md-6 offset-md-3 text-center pop_section">
						<a class="popup-youtube popup-youtube" href="{{$video->link}}"><img src="assets/images/icon-play.png" alt="" data-no-retina=""></a>
					</div>
					@else
					<div class="col-lg-6 col-md-6 offset-md-3 text-center pop_section">
						<a class="popup-youtube popup-youtube" href="https://www.youtube.com/watch?v=28TgRffqMlU"><img src="assets/images/icon-play.png" alt="" data-no-retina=""></a>
					</div>
@endif
				</div>
			</div>
		</section>
		<!--Video Sec End-->

		<!-- Date_form -->
		<section class="margin_top">
			<div class="container reponsive_full">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 bg_black d-flex align-items-center">
						<div class="form_home">
							<div class="section_heading mb-30 text-center">
								<h2>demander votre devis</h2>
							</div>
							
							<!-- Contact FORM -->
							<form class="quote-form" id="contact"action="{{url('/devis')}}" method="POST" enctype="multipart/form-data">
                                  {{csrf_field()}}
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong>Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
								<div class="col-md-6">
										<div class="form-field">
											<input class="input-sm form-full"   id="name" type="text" name="name" placeholder="Nom" required>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="email" name="email" placeholder="Email" required>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-field">
									<input class="input-sm form-full" id="telephone" type="text" name="telephone" placeholder="Numero" required>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-field">
									<input class="input-sm form-full" id="sujet" type="text" name="sujet" placeholder="Sujet" required>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="message" placeholder="Message" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
									
										<input type="submit" value="Envoyer" class="delete-link bnt btn-text sent-but white-btn" >
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->

						</div>
					</div>
					
					

				</div>
			</div>
		</section>
		<!-- Date_form_End -->
	<!-- Gallery_Section -->
	<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Notre Galerie</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>
				<!-- work Filter -->

				<!-- End work Filter -->
				<div class="row container-grid nf-col-3">
                @foreach($photo as $ls)
					<div class="nf-item branding coffee spacing">
						<div class="item-box">
							<a> <img alt="1" src="{{ asset('/'.$ls->image) }}" class="item-container"> </a>
							<div class="link-zoom">
								<a href="{{ asset('/'.$ls->image) }}" class="fancylight popup-btn same_style" data-fancybox-group="light" > <i class="fa fa-search-plus"></i> </a>
								<div class="gallery-heading">
									<h4><a href="#">{{$ls->name}}</a></h4>
								</div>
							</div>

						</div>
					</div>

				@endforeach

				</div>

			</div>
		</section>
		<!-- Gallery_Section -->
		<section id="work" class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Nos Partenaires</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>
				<!-- work Filter -->

				<!-- End work Filter -->
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<ul class="logo-group">
						@foreach($partner as $ls)
							<li class="partner-logo border-b">
								<img src="{{ asset('/'.$ls->image) }}" alt="">
							</li>
							
							@endforeach	
							
						</ul>
					</div>
				</div>

			</div>
		</section>
		<!-- Gallery_Section_End -->

		<!-- Team_Section -->

		<!-- Team_Section_End -->

		<!-- Testimonial_Section -->
		<section class="padding ptb-xs-40 testimonial_section">
			<div class="container">
				<div class="row pb-60 pb-xs-40 light-color">
					<div class="col-md-8 offset-md-2 text-center">
						<div class="section_tit">
							<h2>Nos témoignages</h2>
							<span class="three_line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
					
						<div class="say_testimonial dots_style owl-carousel">

						@foreach($review as $ls)
							<div class="item_testimonial">
								<div class="patient_head d-flex align-items-stretch">
									<div class="patient_img">
										<figure>
											<img src="assets/images/user2-160x160.jpg" alt="" />
										</figure>
									</div>
									<div class="patient_detail d-flex align-items-center" >
										<div>
											<h3>{{$ls->name}}</h3>
											
										</div>
									</div>
								</div>
								<div class="patient_text" style="height: 110px;">
									<p>
							   {{Illuminate\Support\Str::limit($ls->review, 100)}}								
								</p>
								</div>
							</div>
							
							@endforeach
						</div>

					</div>
				</div>

			</div>
		</section>
		<!-- Testimonial_Section_End -->

		<!-- Blog_Section -->
		<section class="blog_section padding ptb-xs-40">
			<div class="container">
			

			</div>
		</section>
		<!-- Blog_Section_End -->
		@endsection