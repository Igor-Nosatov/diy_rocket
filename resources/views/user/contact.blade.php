@extends('layouts.master')

@section('title', 'Контакты')

@section('content')

<section class="shop-breadcrumb  pt-2 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="contact-area pt-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49207.90018898694!2d34.50000391060216!3d49.59451186398536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d825e425e6ba6b%3A0xcf3e6bdfb9e4ca82!2z0J_QvtC70YLQsNCy0LAsINCf0L7Qu9GC0LDQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCAzNjAwMA!5e0!3m2!1suk!2sua!4v1580305133161!5m2!1suk!2sua"
            width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="row pt-3 pb-3">
        <div class="col-lg-12">
          <div class="contact_title">
            <h2 class="shop-title text-center">Get in Touch</h2><br>
            <p class="shop-text text-center">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui.</p>
          </div>
        </div>
      </div>
      <div class="row contact_details  pt-3 pb-3">
        <div class="col-lg-4 col-md-6">
          <div class="media">
            <div class="media-body">
              <p class="shop-text text-center"><i class="fa fa-map-marker" aria-hidden="true"></i> House # 402, Roboto Street,<br />New York, USA.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="media">
            <div class="media-body">
              <p class="shop-text text-center">
                <a href="tel:+1109171234567"><i class="fa fa-phone" aria-hidden="true"></i> +110 - 917 - 123 - 4567</a> <br>
                <a href="tel:+1101911897654"><i class="fa fa-phone" aria-hidden="true"></i> +110 - 191 - 189 - 7654</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="media">
            <div class="media-body">
              <p class="shop-text text-center"><i class="fa fa-envelope" aria-hidden="true"></i> example12@example.com <br>
                <i class="fa fa-envelope" aria-hidden="true"></i> example12@example.com</p>
            </div>
          </div>
        </div>
        <div class="contact_form_inner pt-3">
          <h3 class="shop-title">Drop a Message</h3>
          <form class="contact_us_form row" action="" method="post" id="contactForm">
            <div class="form-group col-lg-4">
              <input type="text" class="form-control" id="name" name="name" placeholder="Full Name *" required>
            </div>
            <div class="form-group col-lg-4">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email Address *" required>
            </div>
            <div class="form-group col-lg-4">
              <input type="text" class="form-control" id="website" name="website" placeholder="Your Website" required>
            </div>
            <div class="form-group col-lg-12">
              <textarea class="form-control" name="message" id="message" rows="8" placeholder="Type Your Message..." required></textarea>
            </div>
            <div class="form-group col-lg-4">
              <button type="submit" value="submit" class="main-btn mx-auto">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


@endsection