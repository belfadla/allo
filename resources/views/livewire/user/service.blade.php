@extends('index')

@section('content') 
<!-- Intro Section -->
<section class="inner-intro bg-img light-color overlay-before parallax-background">
			<div class="container">
				<div class="row title">
					<div class="title_row">
						<h1 data-title="Service"><span>Service</span></h1>
						@if(empty($detail))
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>Tous Les Services</span>
						</div>
						@else
						<div class="page-breadcrumb">
							<a href="{{url('/')}}">Acceuil</a>&nbsp;&nbsp;>>&nbsp;&nbsp; <span>{{$detail->name}}</span>
						</div>
						@endif
					</div>

				</div>
			</div>
		</section>
		<!-- Intro Section -->
		<!-- Service Section -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-md-12">
						<div class="section-title_home">
						@if(empty($detail))
							<h2>Nos <span>Services</span></h2>
							@else
							<h2>Nos  <span>Services</span>  <span>{{$detail->name}}</span></h2>
							@endif
						</div>
					</div>
				</div>

				<div class="row">
				@foreach($us as $ls)
			
							<div class="col-md-6 col-lg-4 mb-xs-30" style="padding-bottom: 30px;">

<div class="courses_popular"style="background: #fff;text-align: center;padding: 30px; border: 1px solid #dedede;">
	 <div class="top_cours">
		 <figure>
			 <img src="{{ asset('/'.$ls->image) }}" style=" width: 268px;height: 179px;"alt="" />
		 </figure>
		 <div class="apply_box d-flex align-items-center">
			 <div class="full_width">
				 <a href="{{url('/detailservice/'.$ls->id)}}" class="btn-text">Lire la suite</a>
			 </div>
		 </div>
	 </div>
		 
	 <div ><h3><a href="{{url('/detailservice/'.$ls->id)}}">{{$ls->name}}</a></h3>
		 <p  >
		 {!!strip_tags(Illuminate\Support\Str::limit($ls->description, 30))!!}
		 </p>
		 </div>
 </div>
</div>
						
                        @endforeach    
				</div>

			</div>
			<div class="d-flex justify-content-center">
          {!! $us->links('vendor.pagination.bootstrap-4') !!}
           </div>
		</section>
	
		
		<!-- Service Section end -->
@endsection