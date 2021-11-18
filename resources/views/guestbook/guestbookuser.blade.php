@extends('landingpage.template')
@section('isihalaman')


<h1 class="text-center font-italic">USER FEEDBACK</h1>
<H6 class="text-center font-italic">Silahkan isi data dan pesan Anda untuk pengembangan website ini</H6>
<div class="col-12">
    <div class="card text-white mb-3 " style="max-width: 100%; background-color:	#0b0da8;">
        <div class="card-header text-center font-italic">Isikan Data Anda</div>
        <div class="card-body text-dark " style="background-color: 	#b7b7be;">

            <form action="{{url('simpanbg')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nohp" class="col-sm-2 col-form-label">No Telp (WA)</label>
                    <div class="col-sm-10">
                      <input type="text" name="notelp" class="form-control" id="nohp">
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kritik" class="col-sm-2 col-form-label">Kritik & Saran</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="kritik-saran" id="kritik" rows="3"></textarea>
                  </div>
                </div>
                
              <div class="row">
                  <div class="col-2 ">
                      <button style="margin-left: 850px;" type="submit" class="btn btn-dark btn-block  text-light">Kirimkan</button>
                  </div>
                  <div class="col-2 ">
                      <button style="margin-left: 530px;" type="reset" class="btn btn-light btn-block  text-dark">Batal</button>
                  </div>
              </div>
              
              </form>
        </div>
    </div>
</div>

@endsection