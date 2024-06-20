  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin LiaMart</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('images/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="{{ (Request::is('admin/dashboard')) ? 'text-white bg-primary' :''}} nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Beranda</p>
            </a>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Produk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="{{ (Request::is('add_product')) ? 'text-white bg-primary' :''}} nav-item">
                <a href="{{url('add_product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Produk</p>
                </a>
              </li>
              <li class="{{ (Request::is('view_product')) ? 'text-white bg-primary' :''}} nav-item">
                <a href="{{url('view_product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Produk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="{{ (Request::is('view_orders')) ? 'text-white bg-primary' :''}} nav-item">
            <a href="{{url('view_orders')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Orderan
                <!--<span class="right badge badge-danger">New</span>!-->
              </p>
            </a>
          </li>
          <li class="{{ (Request::is('view_category')) ? 'text-white bg-primary' :''}} nav-item">
            <a href="{{url('view_category')}}" class="nav-link"> 
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kategori
              </p>
            </a>
                
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>