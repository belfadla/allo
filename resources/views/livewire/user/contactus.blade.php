@extends('index')
@section('content') 
<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title ">
					<div class="title_row">
						<h1 data-title="Contact"><span>Contact</span></h1>
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>Contact</span>
						</div>

					</div>

				</div>
			</div>
		</section>
			<!-- End Intro Section -->
			<section>
			
			</section>
			<!-- Contact Section -->
			<section class="padding ptb-xs-40">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-lg-6">
						       
							<div class="headeing pb-30">
								<h2>Contactez Nous</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form class="contact-form " id="contact"action="{{url('send-mail')}}" method="POST" enctype="multipart/form-data">
                                  {{csrf_field()}}
								<!-- IF MAIL SENT SUCCESSFULLY -->
								
								
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-lg-9">
										<div class="form-field">
											<input style="border-radius: 25px;"class="input-sm form-full" id="name" type="text" name="name" placeholder="Votre Nom" required>
										</div>
										<div class="form-field">
											<input style="border-radius: 25px;" class="input-sm form-full" id="email" type="email" name="email" placeholder="Email" required>
										</div>
										<div class="form-field">
											<input  style="border-radius: 25px;" class="input-sm form-full" id="sujet" type="text" name="sujet" placeholder="Sujet"required>
										</div>
										<div class="form-field">
											<input  style="border-radius: 25px;" class="input-sm form-full" id="telephone" type="text" name="telephone" placeholder="telephone" required>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="form-field">
											<textarea style="border-radius: 25px;"class="form-full" id="message" rows="4" name="message" placeholder="Your Message" required></textarea>
										</div>
									</div>
									<div class="col-lg-9">
										
										<input type="submit" class="btn-text" value="Envoyer">
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-lg-4 contact mt-sm-30 mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3337.0472502259413!2d-8.52163732658073!3d33.2390655269595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda91dd68c2a198d%3A0xf18933e073219e2f!2zMzPCsDE0JzIwLjYiTiA4wrAzMScxNy45Ilc!5e0!3m2!1sen!2sma!4v1605352393179!5m2!1sen!2sma" width="600" height="470" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

								<ul class="event-social">
									
									<li>
										<a href="https://www.facebook.com/allotapiseljadida"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="tel:0661579024"><i class="icon ion-android-call" aria-hidden="true"></i></a>
									</li>
									

									<li>
										<a href="mailto:Teamglobalwork@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
	
			<!-- Contact Section -->
			<!--End Contact-->
@endsection