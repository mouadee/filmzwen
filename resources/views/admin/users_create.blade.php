@extends('admin.index')
@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">{{ $title }}</h3>
	</div>
	<div class="box-body">
		<form action="{{route('users.store')}}" method="post">
			@csrf
			{{-- userame of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.username')}}</label>
				<input class="form-control" type="text" name="username" value="{{old('username')}}" placeholder="{{trans('admin.username')}}">
			</div>

			{{--  name of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.name')}}</label>
				<input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="{{trans('admin.name')}}">
			</div>

			{{--  name of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.phone')}}</label>
				<input class="form-control" type="" name="phone" value="{{old('phone')}}" placeholder="{{trans('admin.phone')}}">
			</div>
			
			{{-- email of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.email')}}</label>
				<input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="{{trans('admin.email')}}">
			</div>
			
			{{-- password of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.password')}}</label>
				<input class="form-control" type="password" name="password" placeholder="{{trans('admin.password')}}">
			</div>

			{{-- country of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.country')}}</label>
				<input class="form-control" type="text" name="country" placeholder="{{trans('admin.country')}}">
			</div>

			{{-- gender of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.gender')}}</label>
				<input class="form-control" type="text" name="gender" placeholder="{{trans('admin.gender')}}">
			</div>
			
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="{{trans('admin.submit_reccord')}}">
			</div>
		</form>
	</div>
</div>

@endsection