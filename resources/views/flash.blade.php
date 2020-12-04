
@if(session()->has('success'))

              <div class="alert alert-success">
                   {{session()->get('success')}}
              </div>
              
@else 
<div class="alert alert-danger">
                   {{session()->get('danger')}}
 </div>
@endif