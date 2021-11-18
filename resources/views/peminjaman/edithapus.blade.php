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
                        <h3 class="mb-0">Edit Data peminjaman</h3>
                    </div>
                    <div class="card-body">
                         <div class="card bg-light ">
                                <div class="card-header bg-light ">Data peminjaman yang akan diedit</div>
                                <div class="card-body">
                                    <form action="{{ route('peminjaman.update',$dtbkhapus->id )}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>ID Peminjaman</label>
                                                <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">                                                 
                                                    <span class="input-group-text"><i class="fas fa-qrcode"></i></span>
                                                  </div>
                                                  <input class="form-control" name="id"  
                                                  type="text" value="{{$dtbkhapus->id}}"> 
                                                </div> 
                                                @if($errors->has('id'))
                                                <small class="text-sm text-danger">{{$errors->first('id')}}</small>
                                                @endif                
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></i></span>
                                                  </div>
                                                  <input class="form-control" name="tglpinjam" 
                                                  type="text" value="{{$dtbkhapus->tglpinjam}}">
                                                </div>
                                                @if($errors->has('tglpinjam'))
                                                <small class="text-sm text-danger">{{$errors->first('tglpinjam')}}</small>
                                            @endif 
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Tanggal Pengembalian</label>
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-calendar-alt"></i></i></span>
                                                    </div>
                                                    <input class="form-control" name="tglhrskembali" placeholder=""
                                                     type="text" value="{{$dtbkhapus->tglhrskembali}}">
                                                  </div>
                                                  @if($errors->has('tglhrskembali'))
                                                <small class="text-sm text-danger">{{$errors->first('tglhrskembali')}}</small>
                                            @endif 
                                                </div>
                                              </div>

                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Nama Peminjam</label>
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input class="form-control" name="name" placeholder="name"
                                                     type="text" value="{{$datapinjaman->User->name}}">
                                                  </div>
                                                  @if($errors->has('name'))
                                                <small class="text-sm text-danger">{{$errors->first('name')}}</small>
                                                  @endif 
                                                </div>
                                              </div>
                                          </div>

                                          <div class="row">
                                            
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Status</label>
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                    </div>
                                                    <select class="custom-select" name="statuspinjam" type="text" placeholder="statuspinjam" id="inputGroupSelect01">
                                                      <option value="{{$dtbkhapus->statuspinjam}}">{{$dtbkhapus->statuspinjam}}</option>
                                                      <option value="selesai">selesai</option>
                                                    </select>
                                                  
                                                      @if($errors->has('statuspinjam'))
                                                    <small class="text-sm text-danger">{{$errors->first('statuspinjam')}}</small>
                                                      @endif 
                                                    </div>
                                                  </div>
                                              </div>
                                          </div>
                                              <div class="row">
                                                <div class="col-md-6">
                                                <label>Buku Di pinjam</label>
                                                </div>
                                              </div>
                                              <table class="table table-condensed table-striped w-100">
                                                <thead>
                                                  <tr>
                                                    <th>Cek</th>
                                                    <th>Judul</th>
                                                    <th>Denda</th>
                                                    {{-- <th>Aksi</th> --}}
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach ($datapinjaman->peminjamandetail as $item)
                                                  @if($item->bkstatus == 'dipinjam')
                                                  <tr>
                                                    <td>
                                                      <input type="checkbox" name="cek[]" value="{{$item->id }}">
                                                    </td>
                                                    <td>{{ $item->buku->judul}}</td>
                                                    <td>
                                                      @php
                                                          $tglhrskembali= \Carbon\Carbon::parse($datapinjaman->tglhrskembali);
                                                          $tglskrg=\Carbon\Carbon::now();
                                                          $haritelat=0;

                                                          if ($tglskrg > $tglhrskembali ) {
                                                            # code...
                                                            $haritelat=$tglhrskembali->diffInDays( $tglskrg);
                                                             echo $haritelat*1000;
                                                            //echo $tglskrg;
                                                          }

                                                          
                                                          @endphp
                                                          <input type="hidden" name="denda[]" value="{{ $haritelat*1000}}">
                                                    </td>
                                                    {{-- <td></td> --}}
                                                  </tr>
                                                  @endif
                                                  @endforeach
                                                </tbody>
                                              </table>
                                              
                                              

                                              {{-- <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                        </div>
                                                        <input class="form-control" name="judul" placeholder="judul"
                                                        type="text" value="{{ $item->buku->judul}}">
                                                        <input class="text" name="idbuku[]" placeholder="idbuku"
                                                        type="hidden" value="{{ $item->buku->id}}" >
                                                    </div>
                                                    <select class="custom-select" name="status" type="text" placeholder="status" id="status">
                                                      <option value="{{ $item->buku->status}}">{{ $item->buku->status}}</option>
                                                      <option value="ada">ada</option>
                                                      <option value="rusak">rusak</option>
                                                      <option value="dimusnahkan">dimusnahkan</option>
                                                    </select>
                                                </div>
                                              </div> --}}
                                              
                                          <div class="row">
                                            <div class="col-md">
                                              <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-pen-alt"></i>
                                                  Update
                                              </button>
                                            </div>
                                          </div>
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
@section('skrip1')
<script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>   
@endsection

                    