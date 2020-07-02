  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MyApp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <p class="font-weight-light text-light">You are logged as</p>  
          <a href="/account" class="d-block pl-4">{{ $loggedUser -> name}} {{ $loggedUser -> surname}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon far fa-circle nav-icon"></i>
              <p>
                Games Table
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/developers" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Developers table</p>
            </a>
          </li>

          {{-- Account --}}
          <li class="nav-item">
            <a href="/account" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Account Settings</p>
            </a>
          </li>

        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>