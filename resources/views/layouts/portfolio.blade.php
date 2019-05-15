@extends('layouts.main')

@section('content')
<h4 class="text-center p-4">
	Our Portfolio
</h4>
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
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_4.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        Formulazoo
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about Formulazoo.
      </a>
    </div>
  </div>
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_5.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        Facesemen
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about Facesemen.
      </a>
    </div>
  </div>
  <div class="row mx-0 portfolio_post_block">
    <div class="col-md-6 px-0 da-project-1" data-aos="zoom-in">
      <img class="cover_img" src="{{asset('/images/portfolio/Screenshot_6.png')}}">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 pl-5 pt-5 pb-3">
      <h4 class="mb-5">
        Colina Insurance
      </h4>
      <a class="btn btn-outline-primary custom_blue_button" href="#">
        Read more about Colina Insurance.
      </a>
    </div>
  </div>
</div>

@endsection
