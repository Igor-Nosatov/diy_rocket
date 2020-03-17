@extends('layouts.master')

@section('title', 'Страница оплаты')

@section('content')
<section class="shop-breadcrumb  pt-2 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="checkout-area">
    <div class="container">
        <div class="returning_customer pb-5">
          <p>
            If you have shopped with us before, please enter your details in the
            boxes below. If you are a new customer, please proceed to the
            Billing & Shipping section.
          </p>
          <form class="row contact_form" action="#" method="post">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="name"  placeholder="Enter your Name ..."/>
            </div>
            <div class="col-md-6 form-group">
              <input type="password" class="form-control" name="password"  placeholder="Enter your Password ..."/>
            </div>
            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="main-btn mb-2">
                LOG IN
              </button>
              <div class="creat_account">
                <input type="checkbox" id="f-option" name="selector" />
                <label for="f-option">Remember me</label>
              </div>
              <a class="lost_pass" href="#">Lost your password?</a>
            </div>
          </form>
        </div>

        <div class="billing_details pt-3 pb-3">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="first" name="name" placeholder="Enter your name ..."/>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="name"  placeholder="Enter your last name ..."/>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="number" name="number"  placeholder="Enter your Phone number ..." />
                  <span class="placeholder" data-placeholder="Phone number"></span>
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="email" name="compemailany"   placeholder="Enter your Email Address ..." />
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="main-btn">
                    <option value="1">Country</option>
                    <option value="2">Country</option>
                    <option value="4">Country</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="add1" name="add1"   placeholder="Enter your Address ..." />
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" id="city" name="city"  placeholder="Enter your Town/City ..."  />
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="main-btn">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP ...." />
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <input type="checkbox" id="f-option2" name="selector" />
                    <label for="f-option2">Create an account?</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <h3>Shipping Details</h3>
                    <input type="checkbox" id="f-option3" name="selector" />
                    <label for="f-option3">Ship to a different address?</label>
                  </div>
                  <textarea class="form-control" name="message" id="message" rows="8" placeholder="Order Notes"></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#">Product
                      <span>Total</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Fresh Blackberry
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Fresh Tomatoes
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Fresh Brocoli
                      <span class="middle">x 02</span>
                      <span class="last">$720.00</span>
                    </a>
                  </li>
                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#">Subtotal
                      <span>$2160.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Shipping
                      <span>Flat rate: $50.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Total
                      <span>$2210.00</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Check payments</label>
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town,
                    Store State / County, Store Postcode.
                  </p>
                </div>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Paypal </label>
                    <img src="img/product/single-product/card.jpg" alt="" />
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town,
                    Store State / County, Store Postcode.
                  </p>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                <a class="main-btn" href="#">Proceed to Paypal</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>



@endsection