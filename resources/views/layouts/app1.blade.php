<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    {{-- css tambahan --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/fonts/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets-admin/css/owl.carousel.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets-admin/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/bootstrap4.6/css/bootstrap.css') }}">
    

    <link rel="stylesheet" href="{{ asset('assets-admin/css/helpers.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/argon.min.css?v=1.2.1') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css')}}"> 
    @yield('notif')
   
</head>
<body class="bg-dark">
  
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-transparent"  id="sidenav-main">
        <div class="scrollbar-inner bg-dark">
          <!-- Brand -->
          <div class="sidenav-header d-flex align-items-center bg-dark">
            <a class="navbar-brand" href="javascript:void(0)">
              {{-- <img src="{{ asset('assets-admin/img/brand/logoweb.png') }}" class="navbar-brand-img" alt="..."> --}}
              <h4 class="text-light">{{  Auth::user()->name  }}</h4>
            </a>
            <div class=" ml-auto bg-light rounded">
              <!-- Sidenav toggler -->
              <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-inner bg-dark">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link @yield('dashboard')" href="{{url('dashboard')}}">
                    <i class="ni ni-tv-2 text-primary"></i>
                    <span class="nav-link-text text-primary">Dashboard</span>
                  </a>
                </li>
                @if($sts=== 'admin')
                <li class="nav-item">
                  <a class="nav-link @yield('peminjaman')" href="{{route('peminjaman.index')}}">
                    <i class="ni ni-planet text-orange"></i>
                    <span class="nav-link-text text-primary">Peminjaman</span>
                  </a>
                </li>
                @endif
                @if($sts=== 'admin')
                <li class="nav-item">
                  <a class="nav-link @yield('anggota')" href="{{route('anggota.index')}}">
                    <i class="fas fa-users text-primary"></i>
                    <span class="nav-link-text text-primary">Anggota</span>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link @yield('profile')" href="{{route('profile.index')}}">
                    <i class="ni ni-single-02 text-yellow"></i>
                    <span class="nav-link-text text-primary">Profile</span>
                  </a>
                </li>
                @if($sts=== 'admin')
                <li class="nav-item">
                  <a class="nav-link @yield('buku')" href="{{route('buku.index')}}">
                    <i class="ni ni-books text-primary"></i>
                    <span class="nav-link-text text-primary">Buku </span>
                  </a>
                </li>
                @endif
                @if($sts=== 'anggota')
                <li class="nav-item">
                  <a class="nav-link @yield('history')" href="{{route('history.index')}}">
                    <i class="fas fa-history text-success"></i>
                    <span class="nav-link-text text-primary">History </span>
                  </a>
                </li>
                @endif
              </ul>
              <!-- Divider -->
              <hr class="my-3">
            </div>
          </div>
        </div>
      </nav>
      <!-- Main content -->
  <div class="main-content" id="panel" style="background-image: url('images/map-image.png'); " >
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark  border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          
              <!-- Sidenav toggler -->
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                {{-- <h3>{{$sts}}</h3> --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link badge badge-success text-dark" style="font-size: 15px;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link badge badge-success text-dark" style="font-size: 15px;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
           
          
        </div>
      </div>
    </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header  pb-6">
          <div class="container-fluid">
            <div class="header-body">
              <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                  {{-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>
                  </nav> --}}
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                  <a href="#" class="btn btn-sm btn-neutral">New</a>
                  <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                </div> --}}
              </div>
              <!-- Card stats -->
             
        <!-- Page content -->
        
  
        <main class="py-4">
          {{-- @yield('content') --}}
          @yield('isi')
      </main>
                    
               
          

<!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets-admin/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets-admin/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/plugins/jasny-bootstrap.min.js') }}"></script>

  <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
  <script src="{{ asset('assets-admin/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets-admin/js/argon.min.js?v=1.2.1') }}"></script>


  {{-- js tambahan --}}    
  <script src="{{ asset('assets-admin/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets-admin/bootstrap4.6/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/owl.carousel.min.js') }}"></script>
  
  <script src="{{ asset('assets-admin/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets-admin/js/jquery.easing.1.3.js') }}"></script>

  <script src="{{ asset('assets-admin/js/select2.min.js') }}"></script>

  <script src="{{ asset('assets-admin/js/main.js') }}"></script>

  {{-- <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script> --}}
  <script>

  $(document).ready(function() {
      $('#example').DataTable();
  } )
  </script>

  <script>

  $(document).ready(function() {
      $('#example1').DataTable();
  } )
  </script>
  <script>
    @if(session('pesan'))
    Swal.fire({
               icon: 'info',
               title: 'konfirmasi',
               text: '{{session("pesan")}}',
               
             })
   @endif

   @if(session('pesanslh'))
    Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: '{{session("pesanslh")}}',
               
             })
   @endif
  </script>

  @yield('skrip1')




</body>
</html>
