@extends('index')
@section('content') 
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Pricing"><span>Tarifs</span></h1>
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>Tarifs</span>
						</div>

					</div>

				</div>
			</div>
		</section>
		<!-- End Intro Section -->


		<section class="padding ptb-xs-40 gray-bg" id="pricing_table2" style="background-color:white;">
		<div class="container">
		<div class="row text-center mb-xs-30">
					<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
						<div class="section-title_home">
							
							<p>
							Les tarifs et les délais que nous pratiquons peuvent  être variables.							</p>
							<br>
						</div>
					</div>
				</div>
		<div class="row">
				
				<div class="col-md-12">
					<div class="slider_cours">
					@foreach($list as $ls)
					
					<?php $query=DB::table('details')->select('*')->where(['service_id'=>$ls->id,'status'=>1])->get();
									
									?>
						<?php if(isset($query) && count($query) > 0){?>
							<?php foreach($query as $link){ ?>
					<div class="card-box pricing-card-style2 ">
								<div class="pricing-card-header">
									<div class="left">
										<h5>{{$link->name}}</h5>
											@if($link->atelier==='null' && $link->domicile==='null')
											
											@elseif($link->atelier==='null')
												<p >A partir de 
										<span style="float:right;font-weight: bold;"> {{$link->domicile}} dh<span>/ {{$link->type}}</span></span>
                                    	</p> 
											@elseif($link->domicile==='null')
												<p >A partir de 
										<span style="float:right;font-weight: bold;"> {{$link->atelier}} dh<span>/ {{$link->type}}</span></span>
                                    	</p> 
											@else
												<p >A partir de 
										<span style="float:right;font-weight: bold;"> {{$link->atelier}} dh<span>/ {{$link->type}}</span></span>
                                    	</p> 
											@endif
									
									
										<div class="pricing-price">
										
										</div>
									</div>
									<div >
										
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul class="list-unstyled mb-4">
											@if($link->atelier==='null' && $link->domicile==='null')
											<br>
											<br>
											@elseif($link->atelier==='null')
											<li>Domicile {{$link->domicile}} dh</li>
											<br>
											@elseif($link->domicile==='null')
											<li>Atelier {{$link->atelier}} dh</li>
											<br>
											@else
											<li>Atelier {{$link->atelier}} dh</li>
											<li>Domicile {{$link->domicile}} dh</li>
											@endif
											
											
										</ul>
									</div>
								</div>
			    	</div>
				
					<?php } ?>
						<?php } else{?>
						
				
					<div class="card-box pricing-card-style2 ">
								<div class="pricing-card-header">
									<div class="left">
										<h5>{{$ls->name}}</h5>
										@if($ls->type==='devis')
								
									<br>
										@else
										<p >A partir de 
											<span style="float:right;font-weight: bold;">{{$ls->atelier}} dh<span>/ {{$ls->type}}</span>
										</span></p>
										@endif
										<div class="pricing-price">
										
										</div>
									</div>
									<div >
										
									</div>
								</div>
								<div class="pricing-card-body">
									<div class="pricing-points">
										<ul class="list-unstyled mb-4">
											@if($ls->domicile==='null' && $ls->atelier==='null')
											<br>
											Contactez Nous pour avoir ton devis!!
											<br>
										<br>
											@else
											<li>Atelier {{$ls->atelier}} dh</li>
											<li>Domicile {{$ls->domicile}} dh</li>
											@endif
											
											
										</ul>
									</div>
								</div>
			    	</div>
				
					<?php 	}?>
						@endforeach 
					</div>
				</div>
				
			</div>
 		
			</div>
		</section>
		
		<!--End Contact-->
@endsection