	
<!-- Modal -->
<div class="modal modal-delete fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete this record?</h4>
      </div>

      {{-- <div class="modal-body">
      	
      </div> --}}
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary pull-left">No</button>
        <a href="{{ route('vehicles.delete', '0') }}" class="btn btn-primary delete pull-right">Yes</a>
      </div>
    </div>
  </div>
</div>