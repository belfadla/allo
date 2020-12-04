@extends('index')
@section('content') 
<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title ">
					<div class="title_row">
						<h1 data-title="Contact"><span>Témoignages</span></h1>
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>Témoignages</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->
		<!-- Testimonial section -->
		<div id="testimonial-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row ">
					<div class="col-sm-12">
						<div class="heading-box pb-30">
							<h2><span>Nos</span>  Témoignages</h2>
							<span class="b-line l-left"></span>
						</div>
					</div>
				</div>
				
                
				<div class="row mt-80">
				@foreach($review as $ls)
                        <div class="col-md-6 col-lg-6" style="padding-bottom:1.5cm;" >
                            <div class="about-block dark-gray-bg  padding-40 clearfix" >
                                <div class="client-avtar left-pos">
                                    <img src="assets/images/user2-160x160.jpg" class="img-responsive" alt="Responsive image">
                                </div>
                                <div class="text-box">
                                    <div class="text-content">
                                        <p>
                                            {{$ls->review}}
                                        </p>
                                    </div>
                                    <div class="box-title">
                                        <h4><span>Poste par :</span> {{$ls->name}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                </div>
                <div class="d-flex justify-content-center">
          {!! $review->links('vendor.pagination.bootstrap-4') !!}
           </div>
                <div class="mb-xs-30">
            <h4>Leave a comment</h4>
            
              <form class="contact-form " id="contact" action="{{url('send-comment')}}" method="POST" enctype="multipart/form-data">
                 {{csrf_field()}}
              <div class="row mt-30">
                  <div class="col-md-6">
                    <input style="border-radius: 25px;" type="text" class="input-lg form-full" value="" placeholder="Name" name="name" id="name" required />
                  </div>
                  <div class="col-md-6">
                    <input style="border-radius: 25px;" type="email" class="input-lg form-full" value="" placeholder="Email" name="email" id="email" required />
                  </div>
                  
                  <div class="col-md-12">
                    <textarea style="border-radius: 25px;" placeholder="Message" name="message" id="message" class="form-full" required></textarea>
                  </div>
                
                  <div class="col-md-12" style="display: flex;justify-content: center;align-items: center;height: 200px;">
        
                    <input type="submit" class="btn-text" value="publier">
                  </div>
                 
               </div>
              </form>
            
          </div>
			</div>
		</div>
		<!-- Testimonial section end -->
@endsection