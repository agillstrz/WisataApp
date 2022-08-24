<ul class="navbar-nav bg-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
          <img height="80px" src="{{ asset('asset/logo.png') }}" alt="">
      </div>
      <div class="sidebar-brand-text ">Manggarais</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item pt-2 ">
      <a class="nav-link collapsed  {{ Request::is('kategori') ? 'active' : '' }}" href="{{ url('kategori') }}">
          <i class="fas fa-fw fa-wrench"></i>
          <span class="fw-bold">Kategori</span>
      </a>
  </li>
  <li class="nav-item ">
      <a class="nav-link collapsed  {{ Request::is('wisata-manggarai') ? 'active' : '' }}" href="{{ url('wisata-manggarai') }}">
          <i class="fas fa-fw fa-wrench"></i>
          <span class="fw-bold">Menu Wisata</span>
      </a>
  </li>


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline pt-2">
      <button class="rounded-circle border-0" id="sidebarToggle"><i class="fa-solid fa-arrow-down-left-and-arrow-up-right-to-center"></i></button>
  </div>

</ul>