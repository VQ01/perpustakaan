@extends('layouts.app1')
@section('buku','active')

@section('isi')
<div class="container-fluid mt--6">
  <div class="row">
      <div class="col">
          <div class="table-responsive py-4">
              <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Data Buku Baru</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                      <!-- Input groups with icon -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-qrcode"></i></span>
                              </div>
                              <input class="form-control" name="kodebuku" placeholder="Kode Buku" 
                              type="text" value="{{old('kodebuku')}}"> 
                            </div>

                            @if($errors->has('kodebuku'))
                                <small class="text-sm text-danger">{{$errors->first('kodebuku')}}</small>
                            @endif

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book"></i></span>
                              </div>
                              <input class="form-control" name="judul" placeholder="Judul Buku" 
                              type="text" value="{{old('judul')}}">
                            </div>

                            @if($errors->has('judul'))
                                <small class="text-sm text-danger">{{$errors->first('judul')}}</small>
                            @endif

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
                                 type="text" value="{{old('pengarang')}}">
                              </div>

                              @if($errors->has('pengarang'))
                                <small class="text-sm text-danger">{{$errors->first('pengarang')}}</small>
                              @endif

                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="fas fa-building"></i></span>
                                </div>
                                <input class="form-control" name="penerbit" placeholder="Penerbit"
                                 type="text" value="{{old('penerbit')}}">
                              </div>

                              @if($errors->has('penerbit'))
                                <small class="text-sm text-danger">{{$errors->first('penerbit')}}</small>
                            @endif

                            </div>
                          </div>
                      </div>
                      <!-- Input groups with icon -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                              </div>
                              <input class="form-control" name="tahun" placeholder="Tahun"
                               type="text" value="{{old('tahun')}}">
                              <div class="input-group-append">
                                <span class="input-group-text"><small class="font-weight-bold"></small></span>
                              </div>
                            </div>
                            @if($errors->has('tahun'))
                                <small class="text-sm text-danger">{{$errors->first('tahun')}}</small>
                            @endif
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="fileinput fileinput-new text-center " data-provides="fileinput">                             
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div >
                                    <span class="btn btn-rose btn-round btn-file">
                                        <span class="fileinput-new ">Cover Buku</span><br>
                                        {{-- <span class="fileinput-exists">Change</span> --}}
                                        <input type="file" name="cover" />
                                        @if($errors->has('cover'))
                                          <small class="text-sm text-danger">{{$errors->first('cover')}}</small>
                                        @endif
                                    </span>
                                    <a href="#pablo" class="btn-sm btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>                     
                          </div>
                        </div>

                        


                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="input-group input-group-merge">
                              {{-- <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                              </div> --}}
                              <button type="submit" class="btn btn-dark btn-block  text-light">Kirimkan</button>
                              {{-- <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                              </div> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection