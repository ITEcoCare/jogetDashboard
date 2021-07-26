<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/jogetdashboard" class="brand-link">
      <img src="<?php echo e(asset('')); ?>assets/dist/img/JogetLogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="">
      <span class="brand-text font-weight-light">Ecocare Joget DX</span>
    </a>

    <!-- Sidebar -->
    
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3 mb-3 d-flex">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Applications
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(url('viewDetails')); ?>" class="nav-link">
                      
                      <i class="far fa-circle nav-icon"></i>
                      <p>App Detail</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(url('af')); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advance Finance</p>
                    </a>
                  </li>
                  
                </ul>
              </li>

          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH D:\xampp\htdocs\adminSite01\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>