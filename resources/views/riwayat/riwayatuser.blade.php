@extends('layouts.app1')
@section('history','active')

@section('isi')
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card bg-gradient-default shadow">
          <div class="card-header bg-transparent">
            <h3 class="mb-0 text-white">Riwayat Peminjaman</h3>
          </div>
          <div class="card-body text-center">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                @foreach ($sql as $item)
              <div class="timeline-block">
                <span class="timeline-step badge-success">
                  <i class="ni ni-bell-55"></i>
                </span>
                <div class="timeline-content">
                  
                  <span class="badge badge-pill badge-success ">Judul Buku</span>
                  <h5 class="text-white mt-3 mb-0">{{ $item->judul }} </h5>

                  <span class="badge badge-pill badge-success mt-3">Tanggal Pinjam</span>
                  <p class="text-light text-sm mt-1 mb-0">{{ $item->tglpinjam }}</p>

                  <span class="badge badge-pill badge-success mt-3">Tanggal Kembali</span>
                  <p class="text-light text-sm mt-1 mb-0">{{ $item->tglhrskembali }}</p>

                  <span class="badge badge-pill badge-success mt-3">status</span>
                  <p class="text-light font-weight-bold">{{ $item->statuspinjam }}</p>
                 
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection