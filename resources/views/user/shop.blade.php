@extends('layouts.master')

@section('title', 'Страница покупок')

@section('content')

<section class="shop-breadcrumb  pt-2 pb-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shop</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>
<section class="category-name">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="shop-title text-uppercase pt-3 pb-5">Power Tools</h3>
      </div>
    </div>
  </div>
</section>
<section class="shop-area">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-3">
        <aside class="shop-sidebar">
          <section class="shop-category pb-2">
            <h3 class="sidebar-title pt-2 pb-2">Categories</h3>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Drills<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Sanders & Planers<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Jigsaws & Power Saws<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Electric Screwdrivers<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Grinders<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Powered Multi-Tools<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Heat Guns<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Soldering Irons<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Staplers & Nailers<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Glue Guns<span class="product-qty">(23)</span></a></li>
              <li class="nav-item">
                <a class="nav-link sidebar-link" href="#">Spray Guns<span class="product-qty">(23)</span></a></li>
            </ul>
          </section>
          <section class="shop-brand pb-2">
            <h3 class="sidebar-title pt-2 pb-2">Brands</h3>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand1">
              <label class="custom-control-label sidebar-link" for="brand1">Draper</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand2">
              <label class="custom-control-label sidebar-link" for="brand2">Bosch</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand3">
              <label class="custom-control-label sidebar-link" for="brand3">Makita</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand4">
              <label class="custom-control-label sidebar-link" for="brand4">Black & Decker</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand5">
              <label class="custom-control-label sidebar-link" for="brand5"> Dewalt</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand6">
              <label class="custom-control-label sidebar-link" for="brand6">Einhell</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand7">
              <label class="custom-control-label sidebar-link" for="brand7">Worx</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand8">
              <label class="custom-control-label sidebar-link" for="brand8">Pro-Craft</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brand9">
              <label class="custom-control-label sidebar-link" for="brand9">HiKOKI</label></div>
          </section>
          <section class="shop-power-type">
            <h3 class="sidebar-title pt-2 pb-2">Power Type</h3>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="powerType1">
              <label class="custom-control-label  sidebar-link" for="powerType1">Cordless <span class="product-qty">(41)</span></label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="powerType2">
              <label class="custom-control-label  sidebar-link" for="powerType2">Corded <span class="product-qty">(41)</span></label></div>
          </section>
          <section class="shop-price-filter">
            <h3 class="sidebar-title pt-2 pb-2">Price Filter</h3>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price1">
              <label class="custom-control-label sidebar-link" for="price1">₴0.00 - ₴9.992</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price2">
              <label class="custom-control-label sidebar-link" for="price2">₴10.00 - ₴19.9915</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price3">
              <label class="custom-control-label sidebar-link" for="price3">₴20.00 - ₴29.9924</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price4">
              <label class="custom-control-label sidebar-link" for="price4">₴30.00 - ₴39.9929</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price5">
              <label class="custom-control-label sidebar-link" for="price5">₴40.00 - ₴49.9927</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price6">
              <label class="custom-control-label sidebar-link" for="price6">₴50.00 - ₴74.9945</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price7">
              <label class="custom-control-label sidebar-link" for="price7">₴75.00 - ₴99.9937</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price8">
              <label class="custom-control-label sidebar-link" for="price8">₴100.00 - ₴249.9962</label></div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="price9">
              <label class="custom-control-label sidebar-link" for="price9">₴250.00 - ₴499.993</label></div>
          </section>
          <section class="shop-rating">
            <h3 class="sidebar-title pt-2 pb-2">Rating</h3>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="star1">
              <label class="custom-control-label  sidebar-link" for="star1">
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
              </label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="star2">
              <label class="custom-control-label  sidebar-link" for="star2">
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
              </label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="star3">
              <label class="custom-control-label  sidebar-link" for="star3">
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star yellow"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
                <span class="star"><i class="fas fa-star"></i></span>
              </label>
            </div>
          </section>
        </aside>
      </div>
      <div class="col-sm-12 col-lg-9">
        <div class="row">
          @include('layouts.card')
        </div>
      </div>
    </div>
    <div class="row justify-content-center pt-5">
      <div class="col-5">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>


@endsection