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
									<li class="breadcrumb-item active" aria-current="page">Galerie</li>
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
                                   
									<th>description</th>
									
                                    <th class="datatable-nosort">Action</th>

								</tr>
							</thead>
							<tbody>
							@foreach($list as $service)
								<tr>
									<td class="table-plus"><img src="{{ asset('/'.$service->image) }}" width="70" height="70" alt=""></td>
									
									
									<td>{{$service->name}}</td>

									<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
								
                                    <form action="{{route('gallery.destroy',$service->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
           
                                        @if($service->status==1)
                                        <a class="dropdown-item" href="{{URL::to('gallery/unactivate/'.$service->id)}}">
                                        <i class="icon-copy dw dw-thumb-down"></i> desactiver 
                            </a>
                            @else
                            <a  class="dropdown-item" href="{{URL::to('gallery/activate/'.$service->id)}}">
                                  
                                    <i class="icon-copy dw dw-like"></i>  activer
                                </a>
                            @endif
                                   
                                        <button class="dropdown-item"  onclick="return confirm('Voulez vous vraiment supprimer cette photo?');">                                
                                        <i class="dw dw-delete-3"></i> Supprimer
										 </button>
										
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