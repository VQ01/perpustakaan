@extends('layouts.app1')
@section('peminjaman','active')

@section('isi')
<div class="container-fluid mt--6">
  <div class="row">
      <div class="col">
          <div class="table-responsive py-4">
              <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Riwayat Peminjaman</h3>
            @foreach ( $riwayat as $item)
            
            @endforeach
            
          </div>
          <div class="table-responsive py-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">User</th> 
                        <th scope="col">Admin</th>
                        <th scope="col">Tgl Pengembalian</th>
                        {{-- <th scope="col">Telat</th> --}}
                        <th scope="col">Status Pinjam</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        <th scope="col">kode</th>
                      </tr>
                      
                      
                  </thead>
                  <tbody>
                    @foreach ($riwayat as $item)
                      <tr>
                          <td>
                            <a class=" text-center mb-0 btn btn-primary" href="{{route('peminjamandetail.show',$item->id)}}">
                              <i class="fas fa-print"></i>
                               Cetak
                            </a>
                          </td>
                          <td>{{ $item->id}}</td>
                          <td>{{ $item->tglpinjam->format('d F Y')}}</td>
                          <td>{{ $item->User->name}}</td>
                          <td>
                          @foreach ($datadmin as $user)
                              @if($item->admin_id == $user->id)
                              {{$user->name}}

                              @endif
                          @endforeach
                          </td>
                          <td>{{ $item->tglhrskembali->format('d F Y')}}</td>
                          
                          <td>{{ $item->statuspinjam}}</td>
                          <td>{{ $item->created_at}}</td>
                          <td>{{ $item->updated_at}}</td>
                          <td>
                            @foreach ($buku as $judul)
                                @if( $item->peminjaman_id == $judul->id)
                                      {{$judul->kodebuku}}
                                @endif
                            @endforeach
                        </td>
                      </tr>
                      

                    @endforeach
                    
                        
                  </tbody>
              </table>
          </div>
        </div>
              </div>
            </div>
      </div>
    </div>
</div>
    
@endsection

