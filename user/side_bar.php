  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../_source/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $company_name; ?> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>

 

         <li class="nav-item has-treeview">
            <a href="manage_cars.php" class="nav-link">
			  <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Listings
               </p>
            </a>
          </li>



         <li class="nav-item has-treeview">
            <a href="add_new_car.php" class="nav-link">
			  <i class="nav-icon fas fa-car"></i>
              <p>
                Sell a Car
               </p>
            </a>
          </li>



         <li class="nav-item has-treeview">
            <a href="manage_user_profile.php" class="nav-link">
			  <i class="nav-icon fas fa-user"></i>
              <p>
                My Profile
               </p>
            </a>
          </li>
 

         <li class="nav-item has-treeview">
            <a href="exit.php" class="nav-link">
			  <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
               </p>
            </a>
          </li>



        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
