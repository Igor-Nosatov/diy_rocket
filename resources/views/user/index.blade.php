@extends('layouts.master')

@section('title', 'Главная страница')

@section('content')

<section class="banner-carousel">
  <div class="row no-gutters">
    <div class="col-lg-12">
      <div id="carouselBannerCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselBannerCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselBannerCaptions" data-slide-to="1"></li>
          <li data-target="#carouselBannerCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item  banner-item active">
            <img src="{{url('./image/banner.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2 class="banner-title">Discover What's the new</h2>
              <button class="banner-btn">Shop Now!</button>
              <p class="banner-text">The new decade is the perfect time to make a change and take steps to improve your physical and mental wellbeing.</p>
            </div>
          </div>
          <div class="carousel-item banner-item">
            <img src="{{url('./image/banner1.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="banner-title">Discover What's the new</h5>
              <button class="banner-btn">Shop Now!</button>
              <p class="banner-text">The new decade is the perfect time to make a change and take steps to improve your physical and mental wellbeing.</p>
            </div>
          </div>
          <div class="carousel-item banner-item">
            <img src="{{url('./image/banner2.jpeg')}}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="banner-title">Discover What's the new</h5>
              <button class="banner-btn">Shop Now!</button>
              <p class="banner-text">The new decade is the perfect time to make a change and take steps to improve your physical and mental wellbeing.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselBannerCaptions" role="button" data-slide="prev">
          <i class="arrow-icon fas fa-long-arrow-alt-left fa-2x"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselBannerCaptions" role="button" data-slide="next">
          <i class="arrow-icon fas fa-long-arrow-alt-right  fa-2x"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>
<hr>
<section class="shop-guarantee pt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="shop-title text-center pb-3">Our Service</h3>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="shop-guarantee__wrapper">
          <p class="text-center shop-info"><img src="{{url('./image/time.svg')}}" alt="" class="svg-icon"> <br><strong>Pay online now or pay <br>when you pick up in-store</strong></p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="shop-guarantee__wrapper">
          <p class="text-center shop-info"><img src="{{url('./image/car.svg')}}" alt="" class="svg-icon"> <br><strong>Order by 6pm. Terms apply.</strong> </p>
        </div>
      </div>
      <div class="col-sm-12 col-lg-4">
        <div class="shop-guarantee__wrapper">
          <p class="text-center shop-info"><img src="{{url('./image/pay.svg')}}" alt="" class="svg-icon"> <br><strong>You can pay later <br>with the argos card</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section class="shop-offers pt-5 display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="shop-title text-center pb-3">Buy our goods! The best choice!</h3>
      </div>
    </div>
    <div class="row">
      @foreach($products as $product)
      <div class="col-lg-4 col-sm-6">
        <div class="card-product">
          <img src="{{ asset($product->image1) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
            </p>
            <p class="card-text">{{ $product->name}}</p>
            <p class="card-text">$ {{ $product->price}}</p>
            <a href="#" class="main-btn">More detail</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<hr class="display-sm-none">
<section class="sign-up-form pt-3">
  <div class="container sign-up-form__margin">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="shop-title text-center">Our News</h3>
        <form>
          <div class="form-row align-items-center">
            <div class="col-sm-5 my-1">
              <h4><img src="{{url('./image/mail.svg')}}" alt="" class=""> Sign up for our latest offers</h4>
            </div>
            <div class="col-sm-5 my-1">
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" class="form-control sign-up-form__form-control" id="inputEmail" placeholder="Enter your email...">
            </div>
            <div class="col-auto my-1">
              <button type="submit" class="main-btn">Confirm identity</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<hr>
<section style="background-image: url('{{ asset('image/drills.jpeg')}}');" class="banner2 pt-3 display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="banner-title pt-5">No more running out of the office at 4pm on Fridays to find a new Drill!</h3>
      </div>
    </div>
  </div>
</section>
<hr>
<section class="category">
  <div class="container">
    <div class="row product">
      <div class="col-lg-12">
        <h3 class="shop-title  text-center">Our Categories</h3>
      </div>
      @foreach($categories as $category)
      <div class="col-lg-3 col-sm-6">
        <div class="card-product">
          <img src="{{ asset($category->image) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <p>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
              <span class="star"><i class="fas fa-star"></i></span>
            </p>
            <p class="card-text">{{$category->name}}</p>
            <a href="/{{ $category->code }}" class="main-btn">More detail</a>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
<hr>
<section class="privacy-info pt-3 display-sm-none">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="shop-title  text-center">Little info about us</h3>
        <p class="shop-text text-justify"> Bought in July 2012 by former Dragons’ Den investor,
          Theo Paphitis, at Robert Dyas we have a long and fascinating history stemming back over 140 years.<br><br>

          In 1872, Robert Dyas emigrated from County Meath, Ireland, with just a £5 inheritance
          to his name and opened up his first ironmongery store. He was a man of notable character
          and remarkable determination with a vision to provide customers with the best products,
          service and advice possible – a tradition that continues to be the focus of Robert Dyas
          stores to this day.<br><br>

          In the following century, our stores expanded, stretching throughout London and the South East.
          During this time we were faced with many setbacks including World War One, the Wall Street Crash,
          and then losing 18 stores, our head office and warehouse in The Blitz. Then in 1997, disaster struck
          again as a fire obliterated our distribution centre and head offices just before Christmas.
          But none of this slowed us down, each time coming together as a team and returning stronger than ever. <br><br>

          From the innovative to the everyday, you’ll find everything you need for your home and garden,

          from cleaning solutions and kitchen essentials to the latest DIY gadgets and gardening
          must-haves – all at great prices.<br><br>

          Our extensive selection of products range from some of the world’s most famous brands through to exciting new start-ups. The common factor between them all is that their products share our ethos for being innovative, practical and designed to last.
        </p>
      </div>
    </div>
  </div>
</section>
<hr>


@endsection