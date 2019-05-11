<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Light Evolutions</title>
    <meta name="description" content="A Digital Agency Website landing page template built by TemplateFlip.com"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="{{ asset('/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/ekko-lightbox.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/main.css')}}" rel="stylesheet">
  </head>
  <body id="top">
        <!--// Header \\-->
    <header>
      <div class="container pt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link smooth-scroll" href={{ route('index') }}>Home</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">About Us</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href={{ route('portfolio') }}>Portfolio</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery">Our Team</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href={{ route('contact') }}>Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
          <div class="col-md-10 col-sm-12 px-0 mx-0">
            <h2 class="display-3" style="margin-left:-6px;">Light Evolutions</h2>
            <h3 class="h5 mt-3">About company</h3><a class="smooth-scroll btn btn-outline-light mt-4" href="#learn">Learn More</a>
          </div>
        </div>
      </div>
    </header> 
        <!--// Header \\-->

        <!--// Main Section \\-->
          @yield('content')
        <!--// Main Section \\-->

        <!--// Footer \\-->
    <footer class="bg-secondary da-section">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-4">
            <div class="h2">Hello!</div>
            <p class="mb-0">info@digitalagency.com</p>
            <p>+1 502-257-1157</p>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('/js/aos.js') }}"></script>
    <script src="{{ asset('/js/ekko-lightbox.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
  </body>
</html>