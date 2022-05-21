  <aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?=$role;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$name;?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="fas fa-address-card"></i>
              <p>
                Student Info
               
              </p>
            </a>
          </li>
            <li class="nav-item menu-open">
            
            <a href="#" class="nav-link active">
              <i class="fa fa-edit"></i>
              <p>
              Enrolled Courses
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="subject_to_attend.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Subjects to Attend</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="attended_subjects.php" class="nav-link active">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Attended Subjects</p>
                </a>
              </li>
            </ul>
          </li>
            
              
           
           
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
