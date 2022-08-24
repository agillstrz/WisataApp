<nav class="navbar  fs-5 fw-bold navbar-expand-lg fixed-top navbar-dark" style="background-color: #606C38">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('asset/logo.png') }}" alt="" width="80" height="70">
        Manggarai Vacation
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse me-auto navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto ">
          <a class="nav-link font-bold active" aria-current="page" href="{{ url('/') }}">Home</a>
          <a class="nav-link active " href="#destination">Destination</a>
          <a class="nav-link active" href="#Souvenir">Souvenir</a>
          @auth
          <li class="nav-item me-3 dropdown "><a href="" class="btn text-capitalize fw-bold fs-5 text-white dropdown-toggle "
            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}</a>
        <ul class="dropdown-menu down" aria-labelledby="navbarDropdown">
          @if(auth()->user()->role_as=='1')
          <li>
              <a class="dropdown-item down " href="{{ url('kategori') }}">Dashboard</a>
          </li>
          @endif
            <li>

                <form class="bg-white p-0 border-0" action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button type="submit" href="{{ url('logout') }}"
                        class="dropdown-item">Logout</button>
                </form>
            </li>

        </ul>
    </li>

          @else 
          <a href="{{ url('login') }}" class="nav-link active">Login</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>