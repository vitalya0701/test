@extends('layouts.main')

@section('content')
    <div class="page-content">
      <div>
<div class="da-section da-work bg-secondary" id="learn">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <div class="card-body mt-4 mb-1 text-center"><i class="pb-3 text-primary fas fa-briefcase fa-3x"></i>
            <div class="h4 pb-3">Software Development: </div>
            <p>Using unique technologies make your web/mobile runs smoothly, helps your business to earn profit in couple seconds.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="zoom-in-up">
          <div class="card-body mt-4 mb-1 text-center"><i class="pb-3 text-primary fas fa-sliders-h fa-3x"></i>
            <div class="h4 pb-3">Dedicated Team:</div>
            <p>Using option of creating your own team makes you see how everything is created from scratch to final release.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-right">
          <div class="card-body mt-4 mb-1 text-center"><i class="pb-3 text-primary fas fa-trophy fa-3x"></i>
            <div class="h4 pb-3">IT Consulting:</div>
            <p>We provide a key success with the technologies. All perspectives will fit your needs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section bg-light" id="services">
  <div class="da-services">
    <div class="container text-center">
      <div class="h3 pb-5 text-center" data-aos="fade-up">Technologies</div>
      <div class="d-flex flex-wrap justify-content-start row">
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">AngularJS</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/angularjs.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">Laravel</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/laravel.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary ">
              <p class="font-weight-bold m-0">WordPress</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/icon-wordpress.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">Reactjs/React native</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/React.js-vs-React-Native.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">Java</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/Логотип_Java.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">PHP</p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/php.png')}}">
            </div>
          </div>
        </div>
        <div class="col-lg-3 technologies__blog col-md-6 align-self-stretch d-flex align-items-center justify-content-center mb-3">
          <div class="d-flex flex-column card justify-content-center p-2 pt-5 h-100" data-aos="zoom-in" data-aos-duration="2000">
            <div class="text-primary">
              <p class="font-weight-bold m-0">
                HTML/CSS
              </p>
            </div>
            <div class="my-auto">
              <img class="technologies__img" src="{{asset('/images/завантаження.jpg')}}">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-projects" id="projects">
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_1.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        ReviewSolicitors
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about ReviewSolicitors.
      </a>
    </div>
  </div>
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_2.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        Lendora
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about Lendora.
      </a>
    </div>
  </div>
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_3.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        CIG Healthcare
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about CIG Healthcare.
      </a>
    </div>
  </div>
</div>
<div class="pt-3 container d-flex justify-content-center">
  <a class="btn btn-outline-primary custom_blue_button" href={{ route('portfolio') }}>
    View all Portfolio
  </a>
</div>
<div class="da-section bg-secondary text-white">
  <div class="container">
    <div class="row px-4">
      <div class="col-md-3 col-sm-6">
        <div class="media py-2" data-aos="flip-up"><i class="mr-3 fas fa-clipboard-check  fa-3x fa-fw"></i>
          <div class="media-body">
            <div class="h5">1575</div>
            <div class="h6">Projects Done</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="media py-2" data-aos="flip-up"><i class="mr-3 fas fa-smile  fa-3x fa-fw"></i>
          <div class="media-body">
            <div class="h5">1245</div>
            <div class="h6">Happy Clients</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="media py-2" data-aos="flip-up"><i class="mr-3 fas fa-file-alt fa-3x fa-fw"></i>
          <div class="media-body">
            <div class="h5">865</div>
            <div class="h6">Appreciations</div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="media py-2" data-aos="flip-up"><i class="mr-3 fas fa-clock  fa-3x fa-fw"></i>
          <div class="media-body">
            <div class="h5">8565</div>
            <div class="h6">Working Hours</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="da-section">
  <div class="container">
    <div class="h3 text-center" data-aos="fade-up">Meet our Team Members</div>
  </div>
  <div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <ol class="carousel-indicators">
        <li class="active" data-target="#da-carouselIndicator" data-slide-to="0"></li>
        <li data-target="#da-carouselIndicator" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-1.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">Pamela Lopez</div>
                  <p class="text-muted">CEO</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-2.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">John Bowman</div>
                  <p class="text-muted">Graphic Designer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-3.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">Mark Shaw</div>
                  <p class="text-muted">Software Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-4.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">Melissa Long</div>
                  <p class="text-muted">Software Developer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-5.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">Betty West</div>
                  <p class="text-muted">Software Developer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card d-block mb-3"><img class="card-img-top" src="images/da-emp-6.jpg" alt="image"/>
                <div class="card-body text-center">
                  <div class="h5">Jeremy Little</div>
                  <p class="text-muted">Software Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container da-gallery" id="gallery">
  <div class="h3 pb-5 text-center" data-aos="fade-up">Photo Gallery</div>
  <div class="card-columns">
    <div class="card"><a href="images/gallery-img-3.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="images/gallery-img-3.jpg" alt="Gallery Image 1"/></a></div>
    <div class="card"><a href="images/gallery-img-5.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="images/gallery-img-5.jpg" alt="Gallery Image 2"/></a></div>
    <div class="card"><a href="images/gallery-img-4.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="images/gallery-img-4.jpg" alt="Gallery Image 3"/></a></div>
    <div class="card"><a href="images/gallery-img-1.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="images/gallery-img-1.jpg" alt="Gallery Image 4"/></a></div>
    <div class="card"><a href="images/gallery-img-2.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="images/gallery-img-2.jpg" alt="Gallery Image 5"/></a></div>
  </div>
</div>
<div class="da-section">
  <div class="container da-company-brand py-5">
    <div class="h3 pb-3 text-uppercase text-center" data-aos="fade-up">Featured in</div>
    <p class="pb-3 text-center" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipiscing elit primis rutrum, <br/>nullam tempor malesuada laoreet tempus</p>
    <div class="row">
      <div class="col-md-3 text-center"><img class="img-fluid" src="images/company-1.jpg" alt="Company Image 1"/></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="images/company-2.jpg" alt="Company Image 2"/></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="images/company-3.jpg" alt="Company Image 3"/></div>
      <div class="col-md-3 text-center"><img class="img-fluid" src="images/company-4.jpg" alt="Company Image 4"/></div>
    </div>
  </div>
</div>
<div class="da-section da-brand bg-secondary">
  <div class="container text-center text-white">
    <div class="carousel slide pb-5" id="da-brand-carouselIndicator" data-ride="carousel">
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="h6 text-uppercase">About Us</div>
              <p>Light Evolutions is a development company with team of professionals that provide services for creating sites and promoting them. It is not just a job for us but the favorite pastime we put heart in, so we are always in search of innovative approaches and creative ideas. Our team always performs assumed obligations on terms and quality of work, thanks to the co-ordinated interaction of the specialists of needed directions.</p>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
@endsection
