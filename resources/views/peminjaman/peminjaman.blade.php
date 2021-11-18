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
            <h3 class="mb-0">Data Peminjaman</h3>
            <a class=" text-center mb-0 btn btn-primary" href="{{route('peminjaman.create')}}">
              <i class="fas fa-plus"></i>
               Tambah Data Peminjaman
            </a>
  
            <a class=" text-center mb-0 btn btn-primary" href="{{route('peminjamandetail.index')}}">
              <i class="fas fa-history"></i>
              Riwayat Peminjaman
            </a>
            
          </div>
          <div class="table-responsive py-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                        <th scope="col" class="text-center">Aksi</th>
                        <th scope="col">ID</th>
                        <th scope="col">Tgl Pinjam</th>
                        <th scope="col">User</th> 
                        <th scope="col">Admin</th>
                        <th scope="col">Tgl Pengembalian</th>
                        <th scope="col">Telat</th>
                        <th scope="col">Denda</th>
                        <th scope="col">Status Pinjam</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($datapinjaman as $item)
                      <tr>	
                          <td> <a title="edit/pengembalian" class="btn btn-link" href="{{route('peminjaman.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                            
                            <a title="print"  class="btn btn-link" href="{{route('peminjaman.show',$item->id)}}" >
                              <i class="fas fa-print"></i>
                            </a>

                            {{-- <a title="hapus" class="btn btn-link" href="{{route('peminjaman.destroy',$item->id)}}">
                              <i class="fas fa-trash-alt"></i>
                            </a> --}}
                          </td>
                          <td>{{ $item->id}}</td>
                          <td>{{ $item->tglpinjam->format('d F Y')}}</td>
                          <td>{{ $item->User->name}}</td>
                          <td>
                          @foreach ($datauser as $user)
                              @if($item->admin_id == $user->id)
                              {{$user->name}}

                              @endif
                          @endforeach
                          </td>
                          <td>{{ $item->tglhrskembali->format('d F Y')}}</td>
                          <td>
                              @php
                               $tglhrskembali= \Carbon\Carbon::parse($item->tglhrskembali);
                               $tglskrg=\Carbon\Carbon::now();
                               $haritelat=$tglhrskembali->diffInDays( $tglskrg);
                               if ($tglskrg > $tglhrskembali ) {
                                 # code...
                                 echo $haritelat;
                               }

                               
                              @endphp  
                          </td>
                          <td>
                            Rp.
                            @php
                             $denda=$haritelat *1000;
                             if ($tglskrg > $tglhrskembali ) {
                                 # code...
                                 echo number_format($denda,0,',','.'); 
                             }  
                            @endphp
                          </td>
                          <td>{{ $item->statuspinjam}}</td>
                          <td>{{ $item->created_at}}</td>
                          <td>{{ $item->updated_at}}</td>
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

