@extends('admin.index')
@section('content')


      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>{{trans('admin.comment')}}</p>
            </div>
            <a href="{{aurl('comment')}}" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-left"></i></a>
            <div class="icon">
              <i class="ion ion-ios-chatboxes"></i>
            </div>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>{{trans('admin.users')}}</p>
            </div>
            <a href="{{aurl('users')}}" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-left"></i></a>
            <div class="icon">
              <i class="ion ion-android-contacts"></i>
            </div>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>{{trans('admin.visits')}}</p>
            </div>
            <a href="#" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-left"></i></a>
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>{{trans('admin.films')}}</p>
            </div>
            <a href="{{aurl('add')}}" class="small-box-footer">{{trans('admin.more')}} <i class="fa fa-arrow-circle-left"></i></a>
            <div class="icon">
              <i class="ion ion-android-film"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center bg-success goToWebsite">
        <a href="/">
          <i class="fa fa-external-link" aria-hidden="true"></i>
          {{trans('admin.goWebsite')}}
        </a>
      </div>
@endsection