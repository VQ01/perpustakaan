<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/argon.css?v=1.2.0') }}" type="text/css"> 
</head>
<body class="bg-default">
        {{-- navbar atas --}}
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
          <div class="container ">
            {{-- <a class="navbar-brand" href="{{ url('/') }}">
              {{ config('app.name', 'Laravel') }}
            </a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
              <div class="navbar-collapse-header">
                <div class="row">
                  <div class="col-6 collapse-brand">
                    <a href="dashboard.html"href="{{ url('/') }}">
                      {{ config('app.name', 'Laravel') }}
                    </a>
                  </div>
                  <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span></span>
                      <span></span>
                    </button>
                  </div>
                </div>
              </div>
            
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a  class="nav-link" href="{{ url('/') }}">
                    <span class="nav-link-inner--text">Dashboard</span>
                  </a>
                </li>
                  @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
              <hr class="d-lg-none" />
              <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
                    <i class="fab fa-facebook-square"></i>
                    <span class="nav-link-inner--text d-lg-none">Facebook</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                    <i class="fab fa-instagram"></i>
                    <span class="nav-link-inner--text d-lg-none">Instagram</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
                    <i class="fab fa-twitter-square"></i>
                    <span class="nav-link-inner--text d-lg-none">Twitter</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
                    <i class="fab fa-github"></i>
                    <span class="nav-link-inner--text d-lg-none">Github</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
        {{-- header --}}
    <div class="main-content">
        <div class="header bg-gradient-primary py-2 py-lg-8 pt-lg-9">
            <div class="container ">
              <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                  <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                    <h1 class="text-white">Selamat Datang</h1>
                    <p class="text-lead text-white">Silahkan melakukan login, jika belum mempunyai akun 
                      silahkan klik menu register</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="separator separator-bottom  separator-skew zindex-100">
              
              <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
              </svg>
            </div>
        
          </div>
          <main class="py-4">
              @yield('content')
          </main>
    
</div>
    <footer class="py-5" id="footer-main" style="">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank"></a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="https://www.facebook.com/creativetim" class="nav-link nav-link-icon" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook"><i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.instagram.com/creativetimofficial" class="nav-link nav-link-icon" target="_blank"  data-toggle="tooltip" data-original-title="Follow us on Instagram"><i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://www.twitter.com/creativetim" class="nav-link nav-link-icon" target="_blank"  data-toggle="tooltip" data-original-title="Follow us on Twitter"><i class="fab fa-twitter-square"></i></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github"><i class="fab fa-github"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

<script src="{{ asset('assets-admin/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets-admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets-admin/js/argon.js?v=1.2.0') }}"></script>
</body>
</html>
