@extends('layouts.app1')
@section('buku','active')

@section('isi')
<div class="container-fluid mt--6">
  <div class="row">
      <div class="col">
          <div class="table-responsive py-4">
              <div class="card">
          <!-- Card header -->
          <div class="card-header">
            <h3 class="mb-0">Data Buku</h3>
            <a class=" text-center mb-0 btn btn-primary" href="{{route('buku.create')}}">
              <i class="fas fa-plus"></i>
               Tambah Data Buku 
            </a>
          </div>
          <div class="table-responsive py-4">
              <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                        <th scope="col">
                         Aksi
                          
                        </th>
                        <th scope="col">kode</th>
                        <th scope="col">judul</th>
                        <th scope="col">pengarang</th>
                        <th scope="col">penerbit</th>
                        <th scope="col">tahun</th>
                        <th scope="col">cover</th>
                        <th scope="col">status</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($databuku as $item)
                      <tr>	
                          <td> <a title="edit" class="btn btn-link" href="{{route('buku.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                            <a title="hapus" class="btn btn-link" href="{{route('buku.show',$item->id)}}"><i class="fas fa-trash-alt"></i></a>
                            <button title="cover" type="button" class="btn btn-link" data-toggle="modal" data-target="#modalcover{{$item->id}}">
                              <i class="far fa-image"></i>
                            </button>
                          </td>
                          <td>{{ $item->kodebuku}}</td>
                          <td>{{ $item->judul}}</td>
                          <td>{{ $item->pengarang}}</td>
                          <td>{{ $item->penerbit}}</td>
                          <td>{{ $item->tahun}}</td>
                          <td>{{ $item->cover}}</td>
                          <td>{{ $item->status}}</td>
                          <td>{{ $item->created_at}}</td>
                          <td>{{ $item->updated_at}}</td>
                      </tr>

                      {{-- modal untuk menampilkan gambar --}}
                      <div id="modalcover{{$item->id}}" class="modal" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Cover Buku</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              {{ asset('storage/gambarbuku')}}/{{ $item->cover}}
                              <img src="{{ asset('storage/gambarbuku')}}/{{ $item->cover}}" class="w-100 h-100 border border-success">
                            </div>
                          </div>
                        </div>
                      </div>

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

