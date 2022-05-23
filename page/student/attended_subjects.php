<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/attended_subjectbar.php';?>
  <!-- Main Sidebar Container -->

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Attended Subjects</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Attended Subjects</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">

                  <div class="row">
                    <div class="col-3">
                      <label>Date From:</label><input type="date" name="" id="attended_from" class="form-control" value="<?=$server_date_only;?>">
                    </div>
                     <div class="col-3">
                      <label>Date To:</label><input type="date" name="" id="attended_to" class="form-control" value="<?=$server_date_only;?>">
                    </div>
                     <div class="col-6">
                      <span style="visibility:hidden;">.</span>
                      <p style="text-align:right;"><a href="#" class="btn btn-primary" onclick="Search()">Search <i class="fa fa-search"></a></i></p>
                    </div>
                  </div>
                  <br>

                  <div class="row">
                    <div class="col-sm-12 col-md-6 col-6">
                      <input type="hidden" name="student_id_attended" id="student_id_attended" value="<?=$name;?>" class="form-control-lg" disabled> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                       <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="sub_attended">
                <thead style="text-align:center;">
                    <th>#</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Date Attended</th>
                    <th>File Submitted </th>
            </thead>
            <tbody id="subject_attended" style="text-align:center;"></tbody>
                </table>
              </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                
                </div>
              </form>
            </div>
            <!-- /.card -->

</div>
</div>
</div>
</section>
</div>

<?php include 'plugins/footer.php';?>
<?php include 'plugins/javascript/attended_subject_script.php';?>
