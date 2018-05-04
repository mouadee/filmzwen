@extends('admin.index')
@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">{{ $title }}</h3>
	</div>
	<div class="box-body">
		<form action="{{route('users.update', [$user->id])}}" method="post">
			@csrf
			<input name="_method" type="hidden" value="PUT">
			{{-- userame of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.username')}}</label>
				<input class="form-control" type="text" name="username" placeholder="{{trans('admin.username')}}" value="{{$user->username}}">
			</div>

			{{--  name of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.name')}}</label>
				<input class="form-control" type="text" name="name" placeholder="{{trans('admin.name')}}" value="{{$user->name}}">
			</div>

			{{--  name of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.phone')}}</label>
				<input class="form-control" type="" name="phone" placeholder="{{trans('admin.phone')}}" value="{{$user->phone}}">
			</div>
			
			{{-- email of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.email')}}</label>
				<input class="form-control" type="email" name="email" placeholder="{{trans('admin.email')}}" value="{{$user->email}}">
			</div>
			
			{{-- password of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.password')}}</label>
				<input class="form-control" type="password" name="password" placeholder="{{trans('admin.password')}}">
			</div>

			{{-- country of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.country')}}</label>
				<input class="form-control" type="text" name="country" placeholder="{{trans('admin.country')}}" value="{{$user->country}}">
			</div>

			{{-- gender of the user --}}
			<div class="form-group">
				<label for="">{{trans('admin.gender')}}</label>
				<input class="form-control" type="text" name="gender" placeholder="{{trans('admin.gender')}}" value="{{$user->gender}}">
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="{{trans('admin.edit')}}">
			</div>
		</form>
	</div>
</div>

@endsection