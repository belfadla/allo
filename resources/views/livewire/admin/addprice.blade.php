@extends('admin')
@section('content')

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4 class="text-blue h4">Ajouter Une Tarif</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin/dashbord')}}">Acceuil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tarifs</li>
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
					
					<form method="post" action="{{route('price.store')}}" enctype="multipart/form-data">
                      @csrf  
                        <div class="form-group">
							<label>prix</label>
							<input class="form-control" type="text" name="price" id="price">
						</div>
                        <div class="form-group">
									<label> Selectionnez service</label>
									<select class="selectpicker form-control" data-style="btn-outline-primary" data-size="5">
										<optgroup label="Condiments" data-max-options="2">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</optgroup>
										<optgroup label="Breads" data-max-options="2">
											<option>Plain</option>
											<option>Steamed</option>
											<option>Toasted</option>
										</optgroup>
									</select>
						</div>
						<div class="form-group">
							
				      	<textarea class="textarea_editor form-control border-radius-0"name="description" id="description"></textarea>
				        </div>
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control-file form-control height-auto" name="image" id="image">
                        </div>
                        <div class="form-group">
                         <input type="submit" value="Ajouter" class="btn btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
                        </div>
					</form>
					
				</div>
			</div>
			
		</div>
	
@endsection