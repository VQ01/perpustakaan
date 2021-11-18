@extends('layouts.app1')
@section('peminjaman','active')

@section('isi')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="table-responsive py-4">
                <div class="card ">
            <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Hapus Data peminjaman</h3>
                    </div>
                    <div class="card-body">

                            <div class="card bg-light ">
                                <div class="card-header bg-light ">Data peminjaman yang akan dihapus</div>
                                <div class="card-body">
                                    <form action="{{ route('peminjaman.edit',$dtbkhapus->id )}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-qrcode"></i></span>
                                                  </div>
                                                  <input class="form-control" name="kodebuku" placeholder="Kode Buku" 
                                                  type="text" value="{{$dtbkhapus->id}}"> 
                                                </div>                 
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                  </div>
                                                  <input class="form-control" name="judul" placeholder="Judul Buku" 
                                                  type="text" value="#">
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input class="form-control" name="pengarang" placeholder="Pengarang"
                                                     type="text" value="#">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                    </div>
                                                    <input class="form-control" name="penerbit" placeholder="Penerbit"
                                                     type="text" value="#">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>

                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                            Hapus
                                        </button>

                                    </form>
                                </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

                    