

			<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_comment{{ $id }}">
	<i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div id="del_comment{{$id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{trans('admin.delete')}}</h4>
      </div>

		<form action="{{route('comment.destroy', $id)}}" method="post">
			@csrf
			<input name="_method" type="hidden" value="DELETE">
		      <div class="modal-body">
		        <h4>{{trans('admin.delete_confirmation')}}</h4>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-success" data-dismiss="modal">{{trans('admin.close')}}</button>
		        <input class="btn btn-danger" type="submit" value="{{trans('admin.delete')}}">
		      </div>
      </form>
    </div>

  </div>
</div>