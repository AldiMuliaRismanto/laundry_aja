<!-- Sidebar Menu -->
<nav class="mt-2">
        
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-header">MAIN NAVIGATION </li>
      <li class ="nav-item">
        <a href="dashboard" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Dashboard
          </p>
        </a>
        <li class="nav-item">
          <a href="/Transaksi" class="nav-link">
            <i class="fas fa-book nav-icon"></i>
            <p>Transaksi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/Layanan" class="nav-link">
            <i class="fas fa-book nav-icon"></i>
            <p>Layanan</p>
          </a>
        </li>
          
        <li class="nav-header">Data</li>
      <li class="nav-item">
        <a href="/Karyawan" class="nav-link">
          <i class="fas fa-user nav-icon"></i>
          <p>
            Data Karyawan
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/customer" class="nav-link">
          <i class="fas fa-user nav-icon"></i>
          <p>
            Data Customer
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link">
          <i class=""></i>
          <p>
            Logout
          </p>
        </a>
      </li>
        
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>