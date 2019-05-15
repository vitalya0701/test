@extends('layouts.main')

@section('content')

<div class="da-contact" id="contact">
  <div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container">
      <div class="card py-4 px-4">
        <div class="h4 pb-4">Contact Us</div>
        <div class="row">
          <div class="col-md-7 col-sm-12 mb-3">
            <div class="da-contact-message">
              <form action="https://formspree.io/your@email.com" method="POST">
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <input class="mr-3 form-control" type="text" name="first-name" placeholder="*First Name" required="required"/>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <input class="form-control" type="text" name="last-name" placeholder="Last Name"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="text" name="Subject" placeholder="*Subject" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="email" name="_replyto" placeholder="*E-mail" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <textarea class="form-control" name="message" placeholder="*Your Message" rows="4" required="required"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-primary" type="submit">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5">
            <p>Non dis torquent conubia neque duis enim lectus, dictumst bibendum nam lacinia faucibus sollicitudin consequat tortor, mattis taciti sem arcu pellentesque quisque.</p>
            <p><b>Email:</b> Ligthevolutionsinfo@gmail.com</p>

@endsection