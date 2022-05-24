<div class="modal fade bd-example-modal-xl" id="verify_attendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> <span>Subject:</span>
          <input type="hidden" name="" id="id_verify" class="form-control-lg" disabled>
         <input type="text" name="" id="subject_verify" class="form-control-lg" disabled>
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
          <div class="col-4">
          <span><b>Student ID:</b></span>   <input type="text" name="" id="sid_verify" class="form-control" disabled>
          
          </div>
           <div class="col-4">
           <span><b>Student Name:</b></span> <input type="text" name="" id="sname_verify" class="form-control" disabled>
          </div>
           <div class="col-4">
            <span><b>Verify Attendance:</b></span>
            <select id="verify_attendance_status" class="form-control">
              <option value="">Select Status</option>
              <option value="Pending">Pending </option>
              <option value="Attend">Attend </option>
            </select>
          </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
        <a href="#" class="btn btn-primary" onclick="verify_status()">Verify</a>
      </div>
         </form>
    </div>
  </div>
</div>
