@extends('admin')
@section('content')

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4 class="text-blue h4">Ajouter Un video</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin/dashbord')}}">Acceuil</a></li>
									<li class="breadcrumb-item active" aria-current="page">videos</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				
				@if(session()->has('success'))
					<div id="successMessage">
					@include('flash')
					</div>
               
                 @endif
			
		
          

                <div class="pd-20 card-box mb-30">
					
					<form method="post" action="{{route('video.store')}}" enctype="multipart/form-data">
                      @csrf  
                    <div class="form-group">
							<label>lien Video</label>
							<input class="form-control" type="text" name="link" id="link" required>
						</div>


                        <div class="form-group">
                         <input type="submit" value="Ajouter" class="btn btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
                        </div>
					</form>
					
				</div>
			</div>
			
		</div>

@endsection