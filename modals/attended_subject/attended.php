<div class="modal fade" id="attended_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Attached File</h4>
        <input type="hidden" name="" id="id" class="form-control">
        <input type="hidden" name="" id="student_id" class="form-control">
        <input type="hidden" name="" id="subj_code" class="form-control">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#"  enctype="multipart/form-data" method="POST">
          
                    <label>File:</label>
                    <input type="file" name="file" class="form-control-lg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <input type="submit" class="btn btn-primary" name="upload" value="Submit">
      </div>
         </form>
    </div>
  </div>
</div>
