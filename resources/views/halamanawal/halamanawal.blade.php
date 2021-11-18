<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap4.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets-admin/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">

    <title>Maju Mundur Library</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand" href="#page-top"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars ms-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
              <!-- Authentication Links -->
              {{-- <h3>{{$sts}}</h3> --}}
              @guest
                  <li class="nav-item">
                      <a class="nav-link nav-item text-uppercase"  href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link nav-item text-uppercase"  href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
              <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                  <li class="nav-item"><a class="nav-link" href="#services">This Website</a></li>
                  <li class="nav-item"><a class="nav-link" href="#portfolio">Book List</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About me</a></li>
                  {{-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li> --}}
              </ul>
          </div>
      </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead" style="background-image: url('images/perpustakaan.jpg');">
      <div class="container">
          <div class="masthead-subheading">Welcome To Our Library Website</div>
          <div class="masthead-heading text-uppercase">Maju Mundur Library</div>
          <a class=" btn-xl text-uppercase" href="#services"><img src="{{ asset('assets-admin/img/brand/logoweb.png') }}" alt=""></a>
      </div>
  </header>
  <!-- Services-->
  <section class="page-section" id="services">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">This Website</h2>
              <p class="section-subheading text-muted">This is an website from our library, Maju Mundur library.
                In this website you can find the book you want to borrow without visiting the library, and you can check the 
                status of the book, is it borrowed or not, and also in this website you can check your history in our library,
                the date when you have to return the book. We hope you like it.
              </p>
          </div>
      </div>
  </section>
  <!-- Portfolio Grid-->
  <section class="page-section bg-light" id="portfolio">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">BOOK LIST</h2>
              <h3 class="section-subheading text-muted"></h3>
          </div>
          <div class="row">
            @foreach ($buku as $item)
              <div class="col-lg-4 col-sm-6  mb-4">
                  <!-- Portfolio item 1-->
                  
                  <div class="portfolio-item  text-center">
                      <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                          {{-- <div class="portfolio-hover">
                              <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                          </div> --}}
                          <img class="img-fluid " src="{{ asset('storage/gambarbuku')}}/{{ $item->cover}}" alt="..." />
                      </a>
                      <div class="portfolio-caption ">
                        {{-- @if($item->status == 'ada')
                          <span class="badge badge-pill badge-success mt-3">{{ $item->status }}</span> 
                        @else
                          <span class="badge badge-pill badge-danger mt-3">{{ $item->status }}</span>
                        @endif --}}
                          <div class="portfolio-caption-heading ">{{ $item->judul }}</div>
                          <div class="portfolio-caption-subheading text-muted">{{ $item->pengarang }}</div>
                      </div>
                  </div>
              </div>
            @endforeach
              </div>
          </div>
      </div>
  </section>
  <!-- About-->
  <section class="page-section bg-dark" id="about">
      <div class="container">
          <div class="text-center text-light">
              <h2 class="section-heading text-uppercase">About me</h2>
              {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
          </div>
          <ul class="timeline text-light">
              <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/fotodiri.jpg') }}" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>M. Fikih Nurul F. </h4>
                          <h4 class="subheading">Web Developer</h4>
                      </div>
                      <div class="timeline-body"><p class="text">Hi, I'm Fiki (21). I develop this web as part of my portfolio.</p></div>
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/sekolah.png') }}" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>Wearnes Education Center Malang (2021)</h4>
                          <h4 class="subheading">Teknik Informatika, Android, dan Game Developer</h4>
                      </div>
                      {{-- <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div> --}}
                  </div>
              </li>
              <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/address.png') }}" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h5>Balongmojo, Puri, Kab. Mojokerto</h5>
                          <h4 class="subheading">Jawa Timur, Indonesia</h4>
                      </div>
                      {{-- <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div> --}}
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-image">
                      <h4>
                          Be Part
                          <br />
                          Of Our
                          <br />
                          Story!
                      </h4>
                  </div>
              </li>
          </ul>
      </div>
  </section>
  <!-- Team-->
  {{-- <section class="page-section bg-light" id="team">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
              <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
          <div class="row">
              <div class="col-lg-4">
                  <div class="team-member">
                      <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                      <h4>Parveen Anand</h4>
                      <p class="text-muted">Lead Designer</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="team-member">
                      <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                      <h4>Diana Petersen</h4>
                      <p class="text-muted">Lead Marketer</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="team-member">
                      <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                      <h4>Larry Parker</h4>
                      <p class="text-muted">Lead Developer</p>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
          </div>
      </div>
  </section> --}}
  <!-- Clients-->
  {{-- <div class="py-5">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-md-3 col-sm-6 my-3">
                  <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." /></a>
              </div>
              <div class="col-md-3 col-sm-6 my-3">
                  <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." /></a>
              </div>
              <div class="col-md-3 col-sm-6 my-3">
                  <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." /></a>
              </div>
              <div class="col-md-3 col-sm-6 my-3">
                  <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." /></a>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- Contact-->
  {{-- <section class="page-section" id="contact">
      <div class="container">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">Contact Us</h2>
              <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
              <div class="row align-items-stretch mb-5">
                  <div class="col-md-6">
                      <div class="form-group">
                          <!-- Name input-->
                          <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                          <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                      </div>
                      <div class="form-group">
                          <!-- Email address input-->
                          <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                          <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                          <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                      </div>
                      <div class="form-group mb-md-0">
                          <!-- Phone number input-->
                          <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                          <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group form-group-textarea mb-md-0">
                          <!-- Message input-->
                          <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                          <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                      </div>
                  </div>
              </div>
              <!-- Submit success message-->
              <!---->
              <!-- This is what your users will see when the form-->
              <!-- has successfully submitted-->
              <div class="d-none" id="submitSuccessMessage">
                  <div class="text-center text-white mb-3">
                      <div class="fw-bolder">Form submission successful!</div>
                      To activate this form, sign up at
                      <br />
                      <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                  </div>
              </div>
              <!-- Submit error message-->
              <!---->
              <!-- This is what your users will see when there is-->
              <!-- an error submitting the form-->
              <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
              <!-- Submit Button-->
              <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
          </form>
      </div>
  </section> --}}
  <!-- Footer-->
  <footer class="footer py-4">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-4 text-lg-start">Copyright &copy; m.fikih.n.f 2021</div>
              <div class="col-lg-4 my-3 my-lg-0">
                  <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/fikihnf01/"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="https://wa.me/qr/I5ZTH3T5WBSNH1"><i class="fab fa-whatsapp"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/fikih-nurul-940bb7185/"><i class="fab fa-linkedin-in"></i></a>
              </div>
              {{-- <div class="col-lg-4 text-lg-end">
                  <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                  <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
              </div> --}}
          </div>
      </div>
  </footer>

  <!-- Portfolio Modals-->
  <!-- Portfolio item 1 modal popup-->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('storage/gambarbuku')}}/{{ $item->cover}}" alt="Close modal" /></div>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="modal-body">
                              <!-- Project details-->
                              <h2 class="text-uppercase">{{ $item->judul }}</h2>
                              <p class="item-intro text-muted">{{ $item->judul }}</p>
                              <img class="img-fluid d-block mx-auto" src="{{ asset('storage/gambarbuku')}}/{{ $item->cover}}" alt="..." />
                              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                              <ul class="list-inline">
                                  <li>
                                      <strong>Client:</strong>
                                      Threads
                                  </li>
                                  <li>
                                      <strong>Category:</strong>
                                      Illustration
                                  </li>
                              </ul>
                              <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                  <i class="fas fa-times me-1"></i>
                                  Close Project
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  







<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="bootstrap4.6/js/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap4.6/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets-admin/scripts.js') }}"></script>

</body>
</html>