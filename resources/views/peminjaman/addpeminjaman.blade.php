@extends('layouts.app1')
@section('peminjaman','active')

@section('notif')
<link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css')}}"> 
@endsection

@section('isi')
<div class="container-fluid mt--6">
  <div class="row">
      <div class="col">
          <div class="table-responsive py-4">
              <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Data Peminjaman Baru</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('peminjaman.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                      <!-- Input groups with icon -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">tgl pinjam</label>
                            <div class="input-group input-group-merge">    
                              <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                              </div>
                              <input class="form-control" name="tglpinjam"  
                              type="date" value="{{ $tglpinjam->format('Y-m-d') }}" required> 
                            </div>

                          </div>
                        </div>
                        <div class="col-md-6 col-sm">
                          <div class="form-group">
                            <label for="user_id">user_id</label>
                            <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                              </div>
                              <select class="custom-select" name="user_id" id="user_id" required>
                                <option selected disabled value="">Pilih Salah Satu</option>
                                @foreach ($dtanggota as $agt)
                                <option  value="{{ $agt->id}}">{{$agt->name}}</option>
                                {{-- <option>3</option>
                                <option>4</option>
                                <option>5</option> --}}
                                @endforeach
                                
                              </select>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="admin_id">admin_id</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"></span>
                                </div>
                                <input class="form-control" name="admin" type="text" value="{{Auth::user()->name}}" readonly>
                                <input class="form-control" name="admin_id" type="hidden" value="{{Auth::user()->id}}" >
                              </div>

                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="tglhrskembali">tglhrskembali</label>
                              <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"></span>
                                </div>
                                <input class="form-control" name="tglhrskembali" id="tglhrskembali" type="date" value="{{ $tglhrskembali }}" readonly>
                              </div>

                            </div>
                          </div>
                      </div>
                      <!-- Input groups with icon -->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="statuspinjam">statuspinjam</label>
                            <div class="input-group input-group-merge">
                              <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                              </div>
                              <input class="form-control" name="statuspinjam" id="statuspinjam"
                               type="text" value="peminjaman baru" readonly>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                    {{-- card buku --}}
                    <div class="card ">
                      <div class="card-header ">
                          <h3 class="mb-0 card-title">Data Buku Baru</h3>
                      </div>
                      <div class="card-body">
                        <table class="table py-4">
                          <thead>
                            <th class="text-center mb-0" style="font-size:12px;  ">Aksi</th>
                            <th class="text-center mb-0" style="font-size:12px; ">Kode Buku</th>
                            <th class="text-center mb-0" style="font-size:12px; ">Judul Buku</th>
                          </thead>
                          <tbody>
                            <tr>
                            <td>
                              <button id="batal1" type="button" class="btn btn-primary text-light text-center" style="border-radius: 20px">Batal</button>
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="buku_id[]" id="buku_id1" type="text" value="" required >
                              <input type="hidden" name="idbuku[]" id="idbuku1" value="">
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="judul[]" id="judul1" type="text" value="" readonly>
                              <input type="hidden" name="jdbk1" id="jdbk1" value="">
                              @if($errors->has('jdbk1'))
                                <small class="text-sm text-danger">{{$errors->first('jdbk1')}}</small>
                              @endif
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button id="batal2" type="button" class="btn btn-primary text-light text-center" style="border-radius: 20px">Batal</button>
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="buku_id[]" id="buku_id2" type="text" value="" >
                              <input type="hidden" name="idbuku[]" id="idbuku2" value="">
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="judul[]" id="judul2" type="text" value="" readonly>
                              <input type="hidden" name="jdbk2" id="jdbk2" value="-">
                              @if($errors->has('jdbk2'))
                                <small class="text-sm text-danger">{{$errors->first('jdbk2')}}</small>
                              @endif
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button id="batal3" type="button" class="btn btn-primary text-light text-center" style="border-radius: 20px">Batal</button>
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="buku_id[]" id="buku_id3" type="text" value="" >
                              <input type="hidden" name="idbuku[]" id="idbuku3" value="">
                            </td>
                            <td>
                              <input class="form-control" style="border-radius: 20px" name="judul[]" id="judul3" type="text" value="" readonly>
                              <input type="hidden" name="jdbk3" id="jdbk3" value="-">
                              @if($errors->has('jdbk3'))
                                <small class="text-sm text-danger">{{$errors->first('jdbk3')}}</small>
                              @endif
                            </td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                        


                        <div class="col-md-4">
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
                      
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection

@section('skrip1')
<script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
    <script> // JQUERY
    //utk menghapus ketikkan dan mencegah pemgiriman data berdasrkan id
      $('#batal1').on('click',function(){
        $('#buku_id1').val(null);
        $('#idbuku1').val(null);
        $('#judul1').val(null);
        $('#jdbk1').val(null);
        $('#buku_id1').focus();
      })
      $('#batal2').on('click',function(){
        $('#buku_id2').val(null);
        $('#idbuku2').val(null);
        $('#judul2').val(null);
        $('#jdbk2').val('-');
        $('#buku_id2').focus();
      })
      $('#batal3').on('click',function(){
        $('#buku_id3').val(null);
        $('#idbuku3').val(null);
        $('#judul3').val(null);
        $('#jdbk3').val('-');
        $('#buku_id3').focus();
      })

      //utk pencarian judul sesuai kode yg diketik
      $('#buku_id1').on('keydown',function(e){
        if(e.which===13){ //cari stlh ditekan enter
          //cari judul buku
          var nURL="{{url('judul')}}";
          var nkodebuku=$('#buku_id1').val();
          $.get(nURL+'/'+nkodebuku,function(data){
            
                $.each(data,function(key, value){
                  if(value.judul != ''){
                      $('#idbuku1').val(value.id);
                      $('#judul1').val(value.judul);
                      $('#jdbk1').val(value.judul);
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'konfirmasi',
                      text: ' kode buku tidak ditemukan',
                      
                    });
                      $('#buku_id1').val(null);
                      $('#idbuku1').val(null);
                      $('#judul1').val(null);
                      $('#jdbk1').val(null);
                      $('#buku_id1').focus();

                  }
                  
                })
            }).fail(function(){

            Swal.fire({
               icon: 'error',
               title: 'konfirmasi',
               text: 'format kode buku salah'
               
             });
              $('#buku_id1').val(null);
              $('#idbuku1').val(null);
              $('#judul1').val(null);
              $('#jdbk1').val(null);
              $('#buku_id1').focus();

          })
          e.preventDefault();//mencegah data dikirim stlh diklik 'oke' pd alert
        }
        
      })
      $('#buku_id2').on('keydown',function(e){
        if(e.which===13){ //cari stlh ditekan enter
          //cari judul buku
          var nURL="{{url('judul')}}";
          var nkodebuku=$('#buku_id2').val();
          $.get(nURL+'/'+nkodebuku,function(data){
            
                $.each(data,function(key, value){
                  if(value.judul != ''){
                      $('#idbuku2').val(value.id);
                      $('#judul2').val(value.judul);
                      $('#jdbk2').val(value.judul);
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'konfirmasi',
                      text: ' kode buku tidak ditemukan',
                      
                    });
                      $('#buku_id2').val(null);
                      $('#judul2').val(null);
                      $('#idbuku2').val(null);
                      $('#jdbk2').val('-');
                      $('#buku_id2').focus();

                  }
                  
                })
            }).fail(function(){

            Swal.fire({
               icon: 'error',
               title: 'konfirmasi',
               text: 'format kode buku salah'
               
             });
              $('#buku_id2').val(null);
              $('#idbuku2').val(null);
              $('#judul2').val(null);
              $('#jdbk2').val('-');
              $('#buku_id2').focus();

          })
          e.preventDefault();//mencegah data dikirim stlh diklik 'oke' pd alert
        }
        
      })
      $('#buku_id3').on('keydown',function(e){
        if(e.which===13){ //cari stlh ditekan enter
          //cari judul buku
          var nURL="{{url('judul')}}";
          var nkodebuku=$('#buku_id3').val();
          $.get(nURL+'/'+nkodebuku,function(data){
            
                $.each(data,function(key, value){
                  if(value.judul != ''){
                      $('#idbuku3').val(value.id);
                      $('#judul3').val(value.judul);
                      $('#jdbk3').val(value.judul);
                  }else{
                    Swal.fire({
                      icon: 'error',
                      title: 'konfirmasi',
                      text: ' kode buku tidak ditemukan',
                      
                    });
                      $('#buku_id3').val(null);
                      $('#judul3').val(null);
                      $('#idbuku3').val(null);
                      $('#jdbk3').val('-');
                      $('#buku_id3').focus();

                  }
                  
                })
            }).fail(function(){

            Swal.fire({
               icon: 'error',
               title: 'konfirmasi',
               text: 'format kode buku salah'
               
             });
              $('#buku_id3').val(null);
              $('#judul3').val(null);
              $('#idbuku3').val(null);
              $('#jdbk3').val('-');
              $('#buku_id3').focus();

          })
          e.preventDefault();//mencegah data dikirim stlh diklik 'oke' pd alert
        }
        
      })

      


    </script>
    
@endsection