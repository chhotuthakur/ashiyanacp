<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    {{-- <img src="dist/img/ashiyana_landscape.png" alt="Real Estate Logo" class="brand-image p-1 elevation-3" style="opacity: .8"> --}}
    <span class="brand-text font-weight-light">Ashiyana CP</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search Properties" aria-label="Search">
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
        <!-- Dashboard -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>

        <!-- Real Estate Tools -->
        <li class="nav-header">Real Estate Tools</li>

        <!-- Properties -->
        <li class="nav-item">
          <a href="/properties" class="nav-link">
            <i class="nav-icon fas fa-building"></i>
            <p>
              Properties
            </p>
          </a>
        </li>

        <!-- Agents -->
        <li class="nav-item">
          <a href="/agents" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Agents
              <span class="badge badge-info right">4</span>
            </p>
          </a>
        </li>

        <!-- Clients -->
        <li class="nav-item">
          <a href="/clients" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Clients
            </p>
          </a>
        </li>

        <!-- Inquiries -->
        <li class="nav-item">
          <a href="/inquiries" class="nav-link">
            <i class="nav-icon fas fa-question-circle"></i>
            <p>
              Inquiries
            </p>
          </a>
        </li>

        <!-- Listings -->
        <li class="nav-item">
          <a href="/listings" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Listings
              <span class="badge badge-info right">10</span>
            </p>
          </a>
        </li>

        <!-- Appointments -->
        <li class="nav-item">
          <a href="/appointments" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>
              Appointments
            </p>
          </a>
        </li>

        <!-- Payments -->
        <li class="nav-item">
          <a href="/payments" class="nav-link">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
              Payments
              <span class="badge badge-info right">5</span>
            </p>
          </a>
        </li>

        <!-- Settings -->
        <li class="nav-item">
          <a href="/settings" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Settings
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
