@extends('landingpage.template')
@section('isihalaman')
    


<!-- jumbotron -->
	<div class="jumbotron jumbotron-fluid" style="background-color:	#faf5f5; margin-top: -63px;">
		 	<div class="container">

		  		<!-- carousel -->
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  	<ol class="carousel-indicators">
					    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					   		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  	</ol>
					 	<div class="carousel-inner" >
					    	<div class="carousel-item active" style="hight:700px; width: 900px;">
					      		<img src="{{ asset('images/crl1.jpg')}}" class="d-block w-100 img-thumbnail" alt="...">
					    	</div>
					    	<div class="carousel-item">
					      		<img src="{{ asset('images/crl4.jpg')}}" class="d-block w-100 img-thumbnail " alt="...">
					    	</div>
					    	<div class="carousel-item">
					      		<img src="{{ asset('images/crl5.png')}}" class="d-block w-100 img-thumbnail" alt="...">
					    	</div>
					  	</div>
					  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>
					</div>
			</div>
	</div>
{{-- katalog --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-dark"style="background-color:	##f1eded; margin-top:-32px;">
                <h4>KATALOG</h4>
            </div>
            <div class="col-sm-12">
                <table class="table m-0">
                    <thead class="thead text-dark" style="background-color:	#f1eded;">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Andre Hirata</td>
                        <td>Sang Pemimp</td>
                        <td>Bentang Pustaka</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Pramudia Ananta Toer</td>
                        <td>Bumi Manusia</td>
                        <td>Hasta Mitra</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Haidar Musyafa</td>
                        <td>Ki Hadjar : Sebuah Memoar</td>
                        <td>Imania</td>
                      </tr>
					  <tr>
                        <th scope="row">4</th>
                        <td>Tere Liye</td>
                        <td>Negeri Para Bedebah</td>
                        <td>Gramedia Pustaka Utama</td>
                      </tr>
					  <tr>
                        <th scope="row">5</th>
                        <td>Hamka</td>
                        <td>Tenggelamnya Kapal Van Der Wijck</td>
                        <td>PT.Bulan Bintang</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
	<!-- cards -->
	
	<div class="container-fluid">
        
		<div class="row">
            <div class="col-sm-12 text-dark" style="background-color:	#f1efef;">
                <h4>Info Buku Terbaru</h4>
            </div>
			<div class="col-sm-1 "></div>
			<div class="col-sm-10  p-0">
				<div class="container-fluid" style="margin-top: 20px; margin-bottom:20px;">
					<div class="row">
						<div class="col-md-3" >
							<div class="card text-center border-dark" style="height: 100%;">
							  <img src="{{asset('images/card4.jpg')}}" class="card-img-top" alt="..." style="width: 50%; padding-top:10px; margin: 0 auto;">
							  <div class="card-body" >
							    <h5 class="card-title">Ki Hadjar : Sebuah Memoar</h5>
							    <p class="card-text"></p>
							    <a href="#" class="btn btn-primary">Detail</a>
                                <a href="#" class="btn btn-primary">Pinjam</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card text-center border-dark" style="height: 100%">
							  <img src="{{ asset('images/card1.jpg')}}" class="card-img-top" alt="..." style="width: 50%; padding-top:10px; margin: 0 auto;">
							  <div class="card-body">
							    <h5 class="card-title">Tenggelamnya Kapal Van Der Wijck</h5>
							    <p class="card-text"></p>
							    <a href="#" class="btn btn-primary">Detai</a>
                                <a href="#" class="btn btn-primary">Pinjam</a>
							  </div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card text-center border-dark" style="height: 100%">
							  <img src="{{ asset('images/card2.jpg')}}" class="card-img-top" alt="..." style="width: 50%; padding-top:10px; margin: 0 auto;">
							  <div class="card-body">
							    <h5 class="card-title">Negeri Para Bedebah</h5>
							    <p class="card-text"></p>
							    <a href="#" class="btn btn-primary">Detail</a>
                                <a href="#" class="btn btn-primary">Pinjam</a>
							  </div>
							</div>
						</div>
                        <div class="col-md-3">
							<div class="card text-center border-dark" style="height: 100%">
							  <img src="{{ asset('images/card3.jpg')}}" class="card-img-top" alt="..." style="width: 50%; padding-top:10px; margin: 0 auto;">
							  <div class="card-body">
							    <h5 class="card-title">Bumi Manusia</h5>
							    <p class="card-text"></p>
							    <a href="#" class="btn btn-primary">Detail</a>

                                <a href="#" class="btn btn-primary">Pinjam</a>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>	
	</div>

	

	

<!-- <div class="container-fluid" style="background-color:#191970;">
		<div class="row">
			<div class="col-sm-1 border border-danger"></div>
				<div class="col-sm-10 border border-danger p-0">
					<div class="container-fluid">
						<div class="row">
						</div>

					</div>
				</div>
			<div class="col-sm-1 border border-danger"></div>
		</div>
	</div> -->


    <!-- Optional JavaScript; choose one of the two! -->

   



    @endsection