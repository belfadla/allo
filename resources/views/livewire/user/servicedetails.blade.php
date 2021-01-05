@extends('index')
@section('content') 
	<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Services Detail"><span>Services Detail</span></h1>
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp;  <a href="{{url('/ToutLesServices')}}">Tous Les Services</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>{{$details->name}}</span>
							
						</div>
						
					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Service Section -->
		<div id="services-section" class="padding ptb-xs-40">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sx-12">
						<div class="single-sidebar-widget">
							<div class="single-sidebar-widget">
							<figure>
								<img style="margin-top:1.25cm;" src="{{ asset('/'.$details->image) }}" alt="">
							</figure>
							</div>
						</div>
						
					</div>
					<div class="col-lg-8 mt-xs-30 mt-sm-30">
						
						<div class="text-box mt-40">
							<div class="box-title mb-20">
								<h2>{{$details->name}}</h2>
							</div>
							<div class="text-content" style=" text-align: justify;
  text-justify: inter-word;">
								
								<p >
								
								{!!$details->description!!}		

							 </p>
							</div>
							

						</div>
						
					</div>
				
					    
				          
				</div>
			            	


							<?php $query=DB::table('details')->select('*')->where(['service_id'=>$details->id,'status'=>1])->get();
									
									?>
						<?php if(isset($query) && count($query) > 0){?>
							<?php foreach($query as $link){ ?>
						  <div class="row mt-45 mt-xs-15 clearfix">
							
							<div class="col-md-7 text-box">
								<div class="box-title mb-20 mt-sm-30 mt-xs-30">
									<h3>{{$link->name}}</h3>
								</div>
								<div class="text-content" style=" text-align: justify;
  text-justify: inter-word;">
									<p>
									{!!$link->description!!}
								
									</p>
								</div>
							</div>
							<div class="col-md-5">
								<img class="img-responsive" src="{{ asset('/'.$link->image) }}" alt="Photo">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 service-box mt-30 mt-xs-0">
								<h3></h3>
								
								
							</div>
						</div>
						<?php } ?>
						<?php } else{?>
							<?php 	}?>
						
			</div>
		</div>
@endsection