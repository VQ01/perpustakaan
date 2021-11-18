@extends('layouts.app1')
@section('dashboard','active')

@section('isi')



        @if($sts == 'anggota')

        <header class="masthead">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-light text-center "  >
                        <div class="masthead-heading text-uppercase" style="font-size: 50px;">Maju Mundur Library</div>
                        <div class="masthead-subheading " style="font-size: 30px;">Selamat Datang, {{ $profile->name }}</div>
                    </div>
                </div>    
            </div>
        </header>
        <div class="container-fluid " style="margin-top: 50px;">
            <div class="row">
                <div class="col-lg-12 text-light text-center "  >
                    <p class="masthead-heading" style="font-size: 18px;">
                        Hai {{ $profile->name }}, ini adalah halaman dashboard kamu di website kami. disisi kiri terdapat sidebar yang berisi menu
                        yang bisa kamu kunjungi.<br> Menu Profile, disini kamu bisa melihat dan melakukan edit terhadap profile kamu.Menu History,
                        disini kamu bisa melihat riwayat peminjaman kamu, mulai dari judul buku yang kamu pinjam, tanggal peminjaman, tanggal 
                        pengembalian buku, sampai status peminjaman kamu.
                    </p>
                </div>
            </div>    
        </div>
        <footer class="footer py-4 bg-transparent " style="margin-top: 100px;">
            <div class="container"></div>
        </footer>
        @elseif( $sts == 'admin')
        <div class="container-fluid ">
            <div class="row">
      {{-- paling kiri warna merah --}}
       <div class="col-sm-1 "></div>
      {{-- tengah --}}
       <div class="col-sm-10  p-0 ">
          <div class="container-fluid ">
              <div class="row">
                @foreach ($buku as $item)
                    
                
                  <div class="col-md-4">
                      <div class="card-product  ">
                        <img src="{{ asset('storage/gambarbuku')}}/{{ $item->cover}}"  class="card-img-top justify-content-center rounded" alt="..." style="width: 150px; margin: 0 auto; height:250px;">
                        <div class="card-body " >
                          <h5 class="card-title text-uppercase text-light">{{ $item->judul }}</h5><br>
                          <h3 class="card-text card-description text-light">{{ $item->pengarang }}</h3><br>
                          <h3 class="card-text text-light ">{{ $item->penerbit }}</h3><br>
                           <h3  class="text-dark text-bold badge badge-danger">{{ $item->status }}</h3>
                           <h3  class="text-dark text-bold badge badge-danger">{{ $item->kodebuku }}</h3>
                          
                        </div>
                      </div>
                  </div>
                  
                @endforeach
        </div>
        </div>
      </div>	
      {{-- paling kanan warna hijau --}}
      <div class="col-sm-1 "></div>
      @endif
  </div>	
  </div>


@endsection