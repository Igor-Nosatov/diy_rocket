@extends('layouts.master')

@section('title', 'Продукт')

@section('content')

<section class="shop-breadcrumb  pt-2 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="product_image_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
              <img src="./img/1.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
              <img src="./img/2.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
              <img src="./img/3.jpg" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
              <img src="./img/4.jpg" alt="" class="img-fluid">
            </div>
          </div>
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true"> <img src="./img/1.jpg" alt="" class="img-pill"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false"><img src="./img/2.jpg" alt="" class="img-pill"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false"><img src="./img/3.jpg" alt="" class="img-pill"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false"><img src="./img/4.jpg" alt="" class="img-pill"></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 col-sm-12">
          <h1 class="product-title">Pro-Craft by Hilka 18V Li-Ion Cordless Drill with 2 Battery Packs</h1>
          <h6 class="product-info">Product code 1987765</h6>
          <p class="product-rating">
            <span class="star"><i class="fas fa-star  yellow"></i></span>
            <span class="star"><i class="fas fa-star  yellow"></i></span>
            <span class="star"><i class="fas fa-star  yellow"></i></span>
            <span class="star"><i class="fas fa-star  yellow"></i></span>
            <span class="star"><i class="fas fa-star  yellow"></i></span>
            <span>74 Review(s)</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span>
            <a href="#review">Add your review</a>
            </span>
          </p>
          <p class="product-price">₴ 335.80</p>
          <p class="product-stock-info"> <i class="fas fa-check-circle fa-2x"></i>&nbsp;&nbsp; In stock</p>
          <hr>
          <form action="">
            <input type="number" min="1" max="15" class="p-2 m-2" required>  <button class="main-btn">Add to cart</button> <button class="wishlist-btn">Add to wishlist  <i class="fas fa-heart"></i></button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="product_description_area mt-5">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p class="card-text text-justify pt-5">
            Beryl Cook is one of Britain’s most talented and amusing artists
            .Beryl’s pictures feature women of all shapes and sizes enjoying
            themselves .Born between the two world wars, Beryl Cook eventually
            left Kendrick School in Reading at the age of 15, where she went
            to secretarial school and then into an insurance office. After
            moving to London and then Hampton, she eventually married her next
            door neighbour from Reading, John Cook. He was an officer in the
            Merchant Navy and after he left the sea in 1956, they bought a pub
            for a year before John took a job in Southern Rhodesia with a
            motor company. Beryl bought their young son a box of watercolours,
            and when showing him how to use it, she decided that she herself
            quite enjoyed painting. John subsequently bought her a child’s
            painting set for her birthday and it was with this that she
            produced her first significant work, a half-length portrait of a
            dark-skinned lady with a vacant expression and large drooping
            breasts. It was aptly named ‘Hangover’ by Beryl’s husband and
          </p>
          <p class="card-text text-justify">
            It is often frustrating to attempt to plan meals that are designed
            for one. Despite this fact, we are seeing more and more recipe
            books and Internet websites that are dedicated to the act of
            cooking for one. Divorce and the death of spouses or grown
            children leaving for college are all reasons that someone
            accustomed to cooking for more than one would suddenly need to
            learn how to adjust all the cooking practices utilized before into
            a streamlined plan of cooking that is more efficient for one
            person creating less
          </p>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive  pt-5">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5 class="card-title">Width</h5>
                  </td>
                  <td>
                    <h5 class="card-title">128mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Height</h5>
                  </td>
                  <td>
                    <h5 class="card-title">508mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Depth</h5>
                  </td>
                  <td>
                    <h5 class="card-title">85mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Weight</h5>
                  </td>
                  <td>
                    <h5 class="card-title">52gm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Quality checking</h5>
                  </td>
                  <td>
                    <h5 class="card-title">yes</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Freshness Duration</h5>
                  </td>
                  <td>
                    <h5 class="card-title">03days</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">When packeting</h5>
                  </td>
                  <td>
                    <h5 class="card-title">Without touch of hand</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5 class="card-title">Each Box contains</h5>
                  </td>
                  <td>
                    <h5 class="card-title">60pcs</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="comment_list  pt-5">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <h5 class="card-title">12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item reply">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <h5 class="card-title">12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-3.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <h5 class="card-title">12th Feb, 2017 at 05:56 pm</h5>
                      <a class="reply_btn" href="#">Reply</a>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box  pt-5">
                <h4 class="card-title">Post a comment</h4>
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Your Full name" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="secondary-btn">
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="row">
            <div class="col-lg-6">
              <div class="row total_rate  pt-5">
                <div class="col-6">
                  <div class="box_total">
                    <h5 class="card-title">Overall</h5>
                    <h4 class="card-title">4.0</h4>
                    <h6 class="card-title">(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-6">
                  <div class="rating_list">
                    <h3 class="card-title">Based on 3 Reviews</h3>
                    <ul class="list">
                      <li>
                        <a href="#">5 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a>
                      </li>
                      <li>
                        <a href="#">4 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a>
                      </li>
                      <li>
                        <a href="#">3 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a>
                      </li>
                      <li>
                        <a href="#">2 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a>
                      </li>
                      <li>
                        <a href="#">1 Star
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review_list">
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-2.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
                <div class="review_item">
                  <div class="media">
                    <div class="d-flex">
                      <img src="img/product/single-product/review-3.png" alt="" />
                    </div>
                    <div class="media-body">
                      <h4 class="card-title">Blake Ruiz</h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="review_box pt-5" id="review">
                <h4 class="card-title">Add a Review</h4>
                <p class="card-text">Your Rating:</p>
                <form class="row contact_form" action="contact_process.php" method="post" novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="star-rating">
                        <input id="star-5" type="radio" name="rating" value="star-5" />
                        <label for="star-5" title="5 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-4" type="radio" name="rating" value="star-4" />
                        <label for="star-4" title="4 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-3" type="radio" name="rating" value="star-3" />
                        <label for="star-3" title="3 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-2" type="radio" name="rating" value="star-2" />
                        <label for="star-2" title="2 stars">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                        <input id="star-1" type="radio" name="rating" value="star-1" />
                        <label for="star-1" title="1 star">
                          <i class="active fa fa-star" aria-hidden="true"></i>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your Full name" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email Address" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="number" placeholder="Phone Number" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="1" placeholder="Review"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12 text-right">
                    <button type="submit" value="submit" class="main-btn">
                      Submit Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <section class="shop-guarantee pt-3 pb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4">
          <div class="shop-guarantee__wrapper">
            <p class="text-center shop-info"><img src="./img/time.svg" alt="" class="svg-icon"> <br><strong>Pay online now or pay <br>when you pick up in-store</strong></p>
          </div>
        </div>
        <div class="col-sm-12 col-lg-4">
          <div class="shop-guarantee__wrapper">
            <p class="text-center shop-info"><img src="./img/car.svg" alt="" class="svg-icon"> <br><strong>Order by 6pm. Terms apply.</strong> </p>
          </div>
        </div>
        <div class="col-sm-12 col-lg-4">
          <div class="shop-guarantee__wrapper">
            <p class="text-center shop-info"><img src="./img/pay.svg" alt="" class="svg-icon"> <br><strong>You can pay later <br>with the argos card</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection