@extends('layouts.master')

@section('title', 'Корзина')

@section('content')
<section class="shop-breadcrumb  pt-2 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="cart-area pt-5 pb-5">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="shop-text">Product</th>
                <th scope="col" class="shop-text">Price</th>
                <th scope="col" class="shop-text">Quantity</th>
                <th scope="col" class="shop-text">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/1.jpg" alt="" class="cart-image"/>
                    </div>
                    <div class="media-body">
                      <p class="shop-text">Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5 class="shop-title">$360.00</h5>
                </td>
                <td>
                  <div class="product_count">

                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5 class="shop-title">$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/1.jpg" alt="" class="cart-image"/>
                    </div>
                    <div class="media-body">
                      <p class="shop-text">Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5 class="shop-title">$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5 class="shop-title">$720.00</h5>
                </td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <a class="main-btn" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex flex-row flex-wrap">
            <button class="main-btn mb-3 mr-1 ml-1">Continue Shopping</button>
            <button class="main-btn mb-3  mr-1 ml-1">Proceed to checkout</button>
          </div>
        </div>
      </div>
  </section>



@endsection