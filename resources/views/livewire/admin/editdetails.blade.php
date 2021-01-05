@extends('admin')
@section('content')

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4 class="text-blue h4">Modifier Un Service</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('admin/dashbord')}}">Acceuil</a></li>
                                    <li class="breadcrumb-item " > <a href="{{route('service.create')}}" >services</a> </li>
									<li class="breadcrumb-item active" aria-current="page">{{$list->name}}</li>
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
					
					<form method="post" action="{{route('detail.update',$list->id)}}" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                     {{ csrf_field() }}
                    <div class="form-group">
							<label>Nom  De Service</label>
							<input class="form-control" type="text" name="name" id="name" value="{{$list->name}}">
						</div>

						<div class="form-group">
							<label>Description </label>
							<textarea class="textarea_editor form-control border-radius-0" name="description" id="description" >{!!$list->description!!}</textarea>
						</div>
						<div class="form-group">
									<label> Selectionnez type</label>
									<select class="selectpicker form-control" name="type" id="type" data-style="btn-outline-primary" data-size="5">
											<option value="&#13217;">&#13217;</option>
											<option value="place">Place</option>
											<option value="unité">Unité</option>
											<option value="devis">Devis</option>
									</select>
						</div>
						<div class="form-group">
						
						<div class="col-md-6 ">
							<label class="weight-600">Lieu de Nettoyage</label>
							@if($list->atelier === 'null')
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="customCheck1" name="lieu[]"onclick="myFunction()" value="null" >
								<label class="custom-control-label" for="customCheck1">Atelier</label>
							</div>
							<div class="col-md-6 ">
									<div class="custom-control ">
									<input style="display:none;" type="text" class="form-control" placeholder="prix atelier" id="prix[0]" name="atelier" value="null" >
									</div>
						   </div>
							@else
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="customCheck1" name="lieu[]"onclick="myFunction()" value="null" checked>
								<label class="custom-control-label" for="customCheck1">Atelier</label>
							</div>
							<div class="col-md-6 ">
									<div class="custom-control ">
									<input style="display:block;" type="text" class="form-control" placeholder="prix atelier" id="prix[0]" name="atelier" value="{{$list->atelier}}" >
									</div>
						   </div>
							@endif
							
							@if($list->domicile === 'null')
							<div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="customCheck2" name="lieu[]" onclick="myFunction1()" value="null">
								<label class="custom-control-label" for="customCheck2" >Domicile</label>
							</div>
							<div class="col-md-6 ">
									<div class="custom-control ">
									<input style="display:none;" type="text" class="form-control" placeholder="prix domicile" id="prix[1]" name="domicile" >
							     </div>
						     </div>
							 @else
							 <div class="custom-control custom-checkbox mb-5">
								<input type="checkbox" class="custom-control-input" id="customCheck2" name="lieu[]" onclick="myFunction1()" value="null" checked>
								<label class="custom-control-label" for="customCheck2" >Domicile</label>
							</div>
							<div class="col-md-6 ">
									<div class="custom-control ">
									<input style="display:block;" type="text" class="form-control" placeholder="prix domicile" id="prix[1]" name="domicile" value="{{$list->domicile}}">
							     </div>
						     </div>
							 @endif
						</div>

					
				</div>
						<div class="form-group">
							<label>Image</label>
                        
                            @if($list->image != '' || $list->image != NULL )
                                &nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('detail/deleteimage/'.$list->id) }}" rel="{{$list->id}}" rel1="delete-image" class="btn btn-link">Delete Old Image</a>                              
                                  <img src="{{asset('/'.$list->image)}}" width="35" alt="">
                                <input type="hidden" name="image" id="image" value="{{asset('/'.$list->image)}}" />
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            @else
							<input type="file" class="form-control-file form-control height-auto" name="image" id="image" required>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                         <input type="submit" value="Modifier" class="btn btn-primary active" data-toggle="button" aria-pressed="true" autocomplete="off">
                        </div>
					</form>
					
				</div>
			</div>
			
		</div>
		<script>
		function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("customCheck1");
  // Get the output text
  var text = document.getElementById("prix[0]");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
function myFunction1() {
  // Get the checkbox
  var checkBox = document.getElementById("customCheck2");
  // Get the output text
  var text = document.getElementById("prix[1]");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }
}
	</script>
@endsection