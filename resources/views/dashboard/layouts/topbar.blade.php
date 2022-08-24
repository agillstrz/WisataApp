
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
   <h1>Dashboard</h1>
<ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>
    
    <!-- Nav Item - User Information -->
    <div class="dropdown border-top">
      <a href="#"
          class="align-items-center d-flex profil  p-3 link-dark text-decoration-none dropdown-toggle  id="dropdownUser3"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{ asset('asset/avatar.png') }}" alt="mdo" width="50" height="50"
              class="rounded-circle">
          <h5 class="ms-2">{{ auth()->user()->name }}</h5>
      </a>
      <ul class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="dropdownUser3">
          <li><a class="dropdown-item" href="{{ url('') }}">Home</a></li>
          <li>
              <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  <span data-feather="log-out"></span> </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>
          </li>
      </ul>
  </div>

</ul>