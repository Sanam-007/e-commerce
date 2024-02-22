 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ url('admin/dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/profile') }}">
      
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ url('admin/enrollment') }}">
      <i class="bi bi-grid"></i>
      <span>Enrollment Requests</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
     
      
      <li>
        
        <a href="{{ url('table-seller') }}">
          <i class="bi bi-circle"></i><span>All sellers</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Creation</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('create-seller') }}">
          <i class="bi bi-circle"></i><span>Seller</span>
        </a>
      </li>
      <li>
        <a href="{{ url('create-category') }}">
          <i class="bi bi-circle"></i><span>Category</span>
        </a>
      </li>
      
      
    </ul>
  </li><!-- End Components Nav -->
</ul>

</aside><!-- End Sidebar-->