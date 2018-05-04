@extends('admin.index')
@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">{{ $title }}</h3>
	</div>
	<div class="box-body">
		<form action="{{route('admin.store')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="">{{trans('admin.name')}}</label>
				<input class="form-control" type="text" name="name" value="{{old('name')}}">
			</div>
			<div class="form-group">
				<label for="">{{trans('admin.email')}}</label>
				<input class="form-control" type="email" name="email" value="{{old('email')}}">
			</div>
			<div class="form-group">
				<label for="">{{trans('admin.password')}}</label>
				<input class="form-control" type="password" name="password">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="{{trans('admin.submit_reccord')}}">
			</div>
		</form>
	</div>
</div>

@endsection