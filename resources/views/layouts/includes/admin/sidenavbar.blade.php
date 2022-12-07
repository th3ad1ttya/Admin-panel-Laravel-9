<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{asset('public/admin/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">@php echo getenv('APP_NAME') @endphp</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Loged in: {{Auth::user()->username}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/admin/dashboard')}}" class="nav-link {{(request()->route()->getName()=='dashboard')?' active':''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header">Loader Management</li>
          <li class="nav-item menu-close">
          <li class="nav-item">
            <a href="{{url('/admin/manage-loader')}}" class="nav-link {{(request()->route()->getName()=='manageLoader')?' active':''}}">
              <i class="nav-icon fa fa-solid fa-list"></i>
              <p>
                Manage Loader
              </p>
            </a>
          </li>
          </li>

          <li class="nav-item">
            <a href="{{ url('admin/safety-status') }}" class="nav-link">
              <i class="nav-icon fa fa-solid fa-shield"></i>
              <p>
                Safety status
              </p>
            </a>
          </li>



          <li class="nav-header">Plugin Management</li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-plug"></i>
              <p>
                Plugin32
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/push-plugin-update')}}" class="nav-link">
                  <i class="fas fa-solid fa-upload"></i>
                  <p>Push plugin update</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/push-lib32-update')}}" class="nav-link">
                  <i class="fas fa-solid fa-upload"></i>
                  <p>Push lib update</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-solid fa-plug"></i>
              <p>
                Plugin64
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/push-plugin64-update')}}" class="nav-link">
                  <i class="fas fa-solid fa-upload"></i>
                  <p>Push plugin update</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/push-lib64-update')}}" class="nav-link">
                  <i class="fas fa-solid fa-upload"></i>
                  <p>Push lib update</p>
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
