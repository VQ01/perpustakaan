<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap4.6/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css')}}">

    <title>Halaman Utama</title>
  </head>
  <body>
    <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark  " style="background-color:	#969494; ">
		<div class="container">
		  <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
            @foreach ($listmenu as $menu)
                @if($menu[2] != 'dropdown')
                  
                <li @if($menu[0] == $hal) class="nav-item active bg-primary " style="border-radius:10px;" @else class="nav-item " @endif>
                  <a class="nav-link font-weight-bold" href="{{ $menu[1] }}">{{ $menu[0] }} <span class="sr-only">(current)</span></a>
                </li>

                @else

                <li @if($menu[0] == $hal)class="nav-item dropdown font-weight-bold bg-primary" style="border-radius:10px;" @else class="nav-item dropdown" @endif  >
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $menu[0] }} 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($listsubmenu as $menu1)
                        <a class="dropdown-item" href="{{ $menu1[1] }}">{{ $menu1[2] }}</a>
                    @endforeach
                  </div>
                </li>
                  </ul>
                  
                </div>
              </div>
            </nav>

                @endif
            @endforeach

      


    @yield('isihalaman')



<!-- bawah -->
<div class="container-fluid" style="background-color:	#969494;">
  <div class="row">
    <div class="col-sm-1 "></div>
      <div class="col-sm-10 p-0">
        <p class="text-white font-weight-bold">Design by M. Fikih Nurul Fatkhan (2020120126) IK3</p>
      </div>
    <div class="col-sm-1"></div>
  </div>
</div>

     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="{{ asset('bootstrap4.6/js/jquery-3.5.1.slim.min.js')}}"></script>
     <script src="{{ asset('bootstrap4.6/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset('bootstrap4.6/js/popper.min.js')}}"></script>
     <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>

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
     
   </body>
 </html>