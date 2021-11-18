@extends('layouts.app1')
@section('profile','active')

@section('isi')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="table-responsive py-4">
                <div class="card ">
            <!-- Card header -->
                    <div class="card-header">
                        <h3 class="mb-0">Edit profile</h3>
                    </div>
                    <div class="card-body">
                         <div class="card bg-light ">
                                <div class="card-header bg-light ">Data pengguna yang akan diedit</div>
                                <div class="card-body">
                                    <form action="{{ route('profile.update',$profile->id)}}" method="POST" enctype="multipart/form-data">
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
                                                  type="text" value="{{ $profile->id}}"> 
                                                </div>                
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>Email</label>
                                                <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></i></span>
                                                  </div>
                                                  <input class="form-control" name="email" 
                                                  type="text" value="{{ $profile->email}}">
                                                </div> 
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Name</label>
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-user"></i></i></span>
                                                    </div>
                                                    <input class="form-control" name="name" placeholder=""
                                                     type="text" value="{{ $profile->name}}">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>First Name</label>
                                                  <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input class="form-control" name="firstname" placeholder="name"
                                                     type="text" value="{{ $profile->firstname}}">
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Last Name</label>
                                                  <div class="input-group input-group-merge">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                      </div>
                                                      <input class="form-control" name="lastname" placeholder="name"
                                                     type="text" value="{{ $profile->firstname}}">
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label>Address</label>
                                                  <div class="input-group input-group-merge">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                                      </div>
                                                      <input class="form-control" name="address" placeholder="name"
                                                     type="text" value="{{ $profile->address}}">
                                                  </div>
                                                </div>
                                              </div>
                                           </div>    
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>City</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                                                    </div>
                                                    <input class="form-control" name="city" placeholder="name"
                                                     type="text" value="{{ $profile->city}}">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group">
                                                <label>Country</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="fas fa-globe"></i></span>
                                                    </div>
                                                    <input class="form-control" name="country" placeholder="name"
                                                     type="text" value="{{ $profile->country}}">
                                                </div>
                                              </div>
                                            </div>
                                          </div>  
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Postal Code</label>
                                              <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-paper-plane"></i></span>
                                                  </div>
                                                  <input class="form-control" name="postalcode" placeholder="name"
                                                     type="text" value="{{ $profile->postalcode}}">
                                                  </div>
                                                </div>
                                              </div>
                                          
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>About me</label>
                                              <div class="input-group input-group-merge">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-comment-alt"></i></span>
                                                  </div>
                                                  <input class="form-control" name="aboutme" placeholder="name"
                                                     type="text" value="{{ $profile->aboutme}}">
                                              </div>
                                            </div>
                                          </div>
                                        </div>  
                                      </div>
                                  </div>
                                          
                                              {{-- <div class="row">
                                                <div class="col-md-6">
                                                <label>Buku Di pinjam</label>
                                                </div>
                                              </div> --}}
                                              {{-- @foreach ($datapinjaman->peminjamandetail as $item)
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="fas fa-book"></i></span>
                                                        </div>
                                                        <input class="form-control" name="judul" placeholder="judul"
                                                        type="text" value="{{ $item->buku->judul}}">
                                                        <input class="text" name="idbuku" placeholder="idbuku"
                                                        type="hidden" value="{{ $item->buku->id}}" >
                                                    </div>
                                                    <select class="custom-select" name="status" type="text" placeholder="status" id="status">
                                                      <option value="{{ $item->buku->status}}">{{ $item->buku->status}}</option>
                                                      <option value="ada">ada</option>
                                                      <option value="rusak">rusak</option>
                                                      <option value="dimusnahkan">dimusnahkan</option>
                                                    </select>
                                                </div>
                                              </div>
                                              @endforeach --}}
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

                    