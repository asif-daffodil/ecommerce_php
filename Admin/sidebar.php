<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
      <nav class="mt-2" id="sideNav">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link active mainMenu">
              <i class="nav-icon fas fa-th"></i>
                Dashboard
            </a>
          </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="javascript:void(0)" class="nav-link mainMenu">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                Products
                <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link chieldMenu" id="allProduct">
                  <i class="far fa-circle nav-icon"></i>
                  All Products
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link chieldMenu" id="addProduct">
                  <i class="far fa-circle nav-icon"></i>
                  Add New Products
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link chieldMenu" id="allCat">
                  <i class="far fa-circle nav-icon"></i>
                  All Category
                </a>
              </li>
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link chieldMenu" id="newCat">
                  <i class="far fa-circle nav-icon"></i>
                  Add New Category
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>