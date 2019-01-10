@extends('admin.index')
@section('content')

<style>

label {
text-align: right!important;
padding: 0 35px;
}
textarea {
max-width: 798px;
min-width: 798px;
min-height: 98px;
}</style>
<div class="box">
  <div class="box-header">
    <h3 class="text-center alert-success addSeries">{{trans('admin.add')}}</h3>
    <form class="form-horizontal" action="{{aurl('add')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="box-body">

        <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">{{trans('admin.Youtube_url')}}</label>
        <div class="col-sm-10">
        <input name="Youtube_url" type="text" class="form-control" id="inputEmail3" placeholder="{{trans('admin.Youtube_url')}}">
        </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">{{trans('admin.Film_language')}}</label>
          <div class="col-sm-10">
            <select name="Film_language" class="form-control">
                <option>{{trans('admin.select')}}</option>
                <option>{{trans('admin.ar')}}</option>
                <option>{{trans('admin.en')}}</option>
              </select>
          </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">{{trans('admin.Film-sesson')}}</label>
          <div class="col-sm-10">
            <input name="Film_season" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-sesson')}}">
          </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">{{trans('admin.Film_ring')}}</label>
          <div class="col-sm-10">
            <input name="Film_ring" type="text" class="form-control" id="" placeholder="{{trans('admin.Film_ring')}}">
          </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">{{trans('admin.Film_productionYears')}}</label>
          <div class="col-sm-10">
            <input name="Film_productionYears" type="text" class="form-control" id="" placeholder="{{trans('admin.Film_productionYears')}}">
          </div>
        </div>

        <div class="form-group">
        <label for="" class="col-sm-2 control-label">{{trans('admin.Film-title')}}</label>
          <div class="col-sm-10">
            <input name="Film_title" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-title')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-poster')}}</label>
          <div class="col-sm-10">
            <input name="Film_poster" type="file" class="form-control" id="" placeholder="{{trans('admin.Film-poster')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-Description')}}</label>

          <div class="col-sm-10">
            <textarea name="Film_Description" class="form-control" rows="3" placeholder="{{trans('admin.Film-Description')}}"></textarea>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-Actor')}}</label>
          <div class="col-sm-10">
            <input name="Film_Actor" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-Actor')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-Hero')}}</label>
          <div class="col-sm-10">
            <select name="Film_Hero" class="form-control Film_language" multiple="multiple">
                  {{-- @foreach ($play as $player) --}}
                  <option>Marck Zuck</option>
                  {{-- @endforeach --}}
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">{{trans('admin.Film-types')}}</label>
          <div class="col-lg-10">
            <select name="Film_types" class="form-control Film_language" multiple="multiple">
              <option>{{trans('admin.action')}}</option>
              <option>{{trans('admin.drama')}}</option>
              <option>{{trans('admin.sience')}}</option>
              <option>{{trans('admin.horror')}}</option>
              <option>{{trans('admin.romentic')}}</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-times')}}</label>
          <div class="col-sm-10">
            <input name="Film_times" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-times')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-feedback')}}</label>
          <div class="col-sm-10">
            <input name="Film_feedback" type="number" class="form-control" id="" placeholder="{{trans('admin.Film-feedback')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-quality')}}</label>
          <div class="col-sm-10">
            <input name="Film_quality" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-quality')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-download')}}</label>
          <div class="col-sm-10">
            <input name="Film_download" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-download')}}">
          </div>
        </div>

        <div class="form-group">
          <label for="" class="col-sm-2 control-label">{{trans('admin.Film-link')}}</label>
          <div class="col-sm-10">
            <input name="Film_link" type="text" class="form-control" id="" placeholder="{{trans('admin.Film-link')}}">
          </div>
        </div>

        </div>
        <!-- /.box-body -->
        <div class="col-lg-12 text-center">
          <button type="submit" class="btn btn-info">{{trans('admin.sign_in')}}</button>
          <button type="submit" class="btn btn-danger">{{trans('admin.cancel')}}</button>
        </div>
        <!-- /.box-footer -->
    </form>
  </div>
</div>


@endsection