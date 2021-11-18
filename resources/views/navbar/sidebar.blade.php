 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white"  id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
              <img src="{{ asset('assets-admin/img/brand/logoweb.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
              <!-- Sidenav toggler -->
              <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link @yield('dashboard')" href="{{url('dashboard')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                </li>
                {{-- @if($sts== 'admin') --}}
                <li class="nav-item">
                  <a class="nav-link @yield('peminjaman')" href="{{route('peminjaman.index')}}">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text">Peminjaman</span>
                  </a>
                </li>
                {{-- @endif --}}
                 <li class="nav-item">
                  <a class="nav-link @yield('anggota')" href="{{route('anggota.index')}}">
                    <i class="fas fa-users text-primary"></i>
                    <span class="nav-link-text">Anggota</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('profile')" href="{{route('profile.index')}}">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text">Profile</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @yield('buku')" href="{{route('buku.index')}}">
                    <i class="ni ni-books text-default"></i>
                    <span class="nav-link-text">Buku </span>
                  </a>
                </li>
                
              </ul>
              <!-- Divider -->
              <hr class="my-3">
            </div>
          </div>
        </div>
       </nav>

       <div class="header  pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="row align-items-center py-4">
              <div class="col-lg-6 col-7">
              </div>
            </div>
          </div>
        </div>
       </div>