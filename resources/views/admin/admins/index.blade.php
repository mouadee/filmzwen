@extends('admin.index')
@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">{{ $title}}</h3>
		{!! $dataTable->table([

	'class' => 'dataTable table table-striped table-hover table-bordred'

		]) !!}
	</div>
</div>
      
@push('js')
{!! $dataTable->scripts() !!}
@endpush

@endsection