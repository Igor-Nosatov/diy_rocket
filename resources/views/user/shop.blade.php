@extends('layouts.master')

@section('title', 'Страница покупок')

@section('content')

<section class="shop-breadcrumb  pt-2 pb-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              <a href="{{ route('shop') }}">Shop</a>
            </li>
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
        @include('partials.sidebar')
      </div>
      <div class="col-sm-12 col-lg-9">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <div class="dropdown pt-3 pb-5">
              <button class="main-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter By
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Featured Items</a>
                <a class="dropdown-item" href="#">Newst Items</a>
                <a class="dropdown-item" href="#">Best Selling</a>
                <a class="dropdown-item" href="#">By review</a>
                <a class="dropdown-item" href="#">Price: max to min</a>
                <a class="dropdown-item" href="#">Price: min to max</a>
                <a class="dropdown-item" href="#">A to Z</a>
                <a class="dropdown-item" href="#">Z to A</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach($products as $product)
          @include('partials.card', compact('product'))
          @endforeach
        </div>
      </div>
    </div>
    <div class="row justify-content-center pt-5">
      <div class="col-5">
        {{ $products->links() }}
      </div>
    </div>
  </div>
</section>


@endsection