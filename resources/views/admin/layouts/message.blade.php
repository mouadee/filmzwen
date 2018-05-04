@if(count($errors->all()) > 0)
 <div class="alert alert-danger">
 	<ul class="list-unstyled">
 		@foreach($errors->all() as $error)
 		 <li>{{ $error }}</li>
 		@endforeach
 	</ul>
 </div>
@endif

@if(session()->has('success'))
 <div class="alert alert-success alert-dismissible">
 	<h5>{{ session('success') }}</h5>
 </div>
@endif

@if(session()->has('error'))
 <div class="alert alert-danger alert-dismissible">
 	<h5>{{ session('error') }}</h5>
 </div>
@endif