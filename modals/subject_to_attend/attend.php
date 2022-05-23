<div class="modal fade" id="attend_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> <span>Subject:</span>
          <input type="text" name="" id="subject" class="form-control-lg" disabled>
          <input type="hidden" name="" id="scode" class="form-control-lg" disabled>
          <input type="hidden" name="" id="sid" class="form-control-lg" disabled>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h4 style="text-align:center; color: red;">Are you sure you want to Attend? </h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <a href="#" class="btn btn-primary" onclick="Attend()">Attend</a>
      </div>
         </form>
    </div>
  </div>
</div>
