@include('admin.layouts.header')
@include('admin.layouts.nav')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ trans('admin.Administration')}}
            <small> {{ trans('admin.controlPanel')}} </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('admin.Home')}} </a></li>
{{--            <li class="active"> {{ trans('admin.dashboard')}} </li>--}}
            <lis class="active"> / {{trans('admin'.'.'.substr((Route::getFacadeRoot()->current()->uri()),6)) }}</lis>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('admin.layouts.message')
        @yield('content')
    </section>
    <!-- /.content -->
</div>


@include('admin.layouts.footer')