@extends('admin')
@section('content')

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin/dashbord')}}">Acceuil</a></li>
									<li class="breadcrumb-item active" aria-current="page">liste services</li>
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
                <div class="card-box mb-30">
					<div class="pd-20">
						
					</div>
					<div class="pb-20">
						<table class="table hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>Image</th>
                                    <th>Nom des services</th>
									<th>description</th>
									<th>lieu et prix de Nettoyage </th>
									
									
                                    <th class="datatable-nosort">Action</th>

								</tr>
							</thead>
							<tbody>
							@foreach($list as $service)
								<tr>
									<td class="table-plus"><img src="{{ asset('/'.$service->image) }}" width="70" height="70" alt=""></td>
									<td>{{$service->name}}</td>
									
									<td>{!!$service->description!!}</td>
									
									<td>
									@if($service->atelier=="null" && $service->domicile=="null")
						            <a class="btn btn-primary active" href="{{URL::to('service/list/'.$service->id)}}">
                                        details </a>
									@elseif($service->atelier=="null")
									Domicile {{$service->domicile}} Dirhams par {{$service->type}}
									@elseif($service->domicile=="null")
									Atelier {{$service->atelier}}  Dirhams par {{$service->type}}
									@else
									Atelier {{$service->atelier}}  Dirhams par {{$service->type}}<br>
									Domicile {{$service->domicile}} Dirhams par {{$service->type}}
									@endif
									</td>
									<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								
                                    <form action="{{route('service.destroy',$service->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
           
                                        @if($service->status==1)
                                        <a class="dropdown-item" href="{{URL::to('service/unactivate/'.$service->id)}}">
                                        <i class="icon-copy dw dw-thumb-down"></i> desactiver 
                            </a>
                            @else
                            <a  class="dropdown-item" href="{{URL::to('service/activate/'.$service->id)}}">
                                  
                                    <i class="icon-copy dw dw-like"></i>  activer
                                </a>
                            @endif
										<a class="dropdown-item" href="{{route('service.edit',$service->id)}}"><i class="dw dw-edit2"></i> Modifier</a>
                                   
                                        <button class="dropdown-item"  onclick="return confirm('Voulez vous vraiment supprimer ce service?');">                                
                                        <i class="dw dw-delete-3"></i> Supprimer
										 </button>
										 <a class="dropdown-item" href="{{URL::to('service/create/'.$service->id)}}">
										<i class="icon-copy ion-plus-round"></i> Ajouter details </a>
										<a class="dropdown-item" href="{{URL::to('service/list/'.$service->id)}}">
                                        <i class="icon-copy ion-android-menu"></i> details </a>
                                    </form>
                                    </div>
								</div>
							</td>
								</tr>
                            @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
		</div>
	
@endsection