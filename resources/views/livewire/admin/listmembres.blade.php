@extends('admin')
@section('content')

		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4 class="text-blue h4">Liste Des Membres</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('admin/dashbord')}}">Acceuil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Membres</li>
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
								<th>Name</th> 
								<th>Phone</th>
								<th>Email</th>  
								<th>Type</th> 
                                    <th class="datatable-nosort">Action</th>

								</tr>
							</thead>
							<tbody>
                            @foreach($list as $service)
								<tr>
									<td class="table-plus">{{$service->name}}</td>
									<td>{{$service->telephone}}</td>
									<td>{{$service->email}}</td>
									<td><a  class="ex2" href="{{URL::to('demanderdevis/unactivate/'.$service->id)}}" >{{$service->type}}</a></td>
									<td>
								<div class="dropdown">
									<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="dw dw-more"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <form action="{{route('demanderdevis.destroy',$service->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                   
                                        <button class="dropdown-item"  onclick="return confirm('Voulez vous vraiment supprimer ce service?');">                                
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