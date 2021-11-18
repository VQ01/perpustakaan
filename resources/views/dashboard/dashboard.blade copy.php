@extends('layouts.app1')
@section('dashboard','active')

@section('isi')

<div class="container-fluid">
    <div class="row">
        <div class="col-md text-center ">
            <h1 class="text-white" style="font-size: 45 px;">Selamat Datang di Perpustakaan Maju Mundur Sukses</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <img style="text-align: center;" src="{{ asset('storage/gambarbuku/pp.jpg')}}" >
        </div>
    </div>
</div>

<div class="card bg-primary" >
    <div class="card-header bg-primary "><h1 class="text-white text-center">Daftar Buku</h1></div>
        <div class="card-body">
            <div class="card-deck">
                <div class="col-md-3">
                    <div class="card  " >
                    <img src="{{ asset('storage/gambarbuku/006.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">Easy & Simple WEB PROGRAMMING</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">006</span></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/007.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">The Pragmatic Programmer</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">007</span></h4>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card ">
                        <img src="{{ asset('storage/gambarbuku/008.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">Introduction To Algorithms</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">008</span></h4>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/010.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">The Art Of Computer Programming</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">010</span></h4>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/009.png')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">Eloquent JavaScript</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">009</span></h4>
                            
                            
                        </div>
                    </div>
                </div>

                

                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/011.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">C# In Depth</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">011</span></h4>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/012.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">Effective Java</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">012</span></h4>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card " >
                        <img src="{{ asset('storage/gambarbuku/013.jpg')}}" style="width: 150px; margin: 0 auto; height:250px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-center text-black">Head First Java</h4>
                            <h4 class="text-center "><span class="badge badge-danger" style="font-size: 20px;">013</span></h4>
                            
                            
                        </div>
                    </div>
                </div>
                
              </div>
        </div>
</div>


@endsection