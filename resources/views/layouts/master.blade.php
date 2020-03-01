<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DIY Rocket: @yield('title')</title>
    <link rel="stylesheet" href="css/style.bundle.css" />
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
</head>

<body>
    <header class="header">
        <section class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="d-flex  flex-wrap justify-content-between">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="#">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="#">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link " href="#">Call Us: 0999 87 87 676</a>
                                </li>
                            </ul>
                            <h6 class="top-bar__header-link pt-2 text-uppercase font-weight-bold">Just Buy It! The best Electric Instruments</h6>
                            <ul class="nav ">
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="#"><i class="far fa-user-circle"></i> Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="#"><i class="far fa-heart"></i> Wishlist</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="{{ route('cart') }}"><i class="fas fa-shopping-cart"></i> Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link top-bar__header-link" href="{{ route('contact') }}"> Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Drills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Sanders & Planers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Jigsaws & Power Saws</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Electric Screwdrivers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Grinders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link header-link" href="#">Powered Multi-Tools</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control  w-75" type="text" placeholder="Search" aria-label="Search">
                    <button class="main-btn w-25" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
      @yield('content')
    <footer class="footer">
        <section class="footer__nav p-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3">
                        <h3 class="footer-nav-title">Customer Service</h3>
                        <ul class="nav flex-column footer__nav-menu">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Help home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Your Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Returns & refunds</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link " href="#">Product recall</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3 class="footer-nav-title">Payment methods</h3>
                        <ul class="nav flex-column footer__nav-menu">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Gift cards</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Payment types</a>
                            </li>
                        </ul>
                        <h3 class="footer-nav-title">Aftercare</h3>
                        <ul class="nav flex-column footer__nav-menu">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Aftercare</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Product care</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Product support</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3 class="footer-nav-title">Information</h3>
                        <ul class="nav flex-column footer__nav-menu">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Advice & inspiration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Site map</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Terms & Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-lg-3">
                        <h3 class="footer-nav-title">About Power tools Rocket</h3>
                        <ul class="nav flex-column footer__nav-menu">
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Accessibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer__nav-menu__link" href="#">Cookies policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  footer__nav-menu__link" href="#">FAQs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__brand p-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="./img/brand1.jpg" alt="" class="footer-brand ">
                    </div>
                    <div class="col">
                        <img src="./img/brand2.jpg" alt="" class="footer-brand ">
                    </div>
                    <div class="col">
                        <img src="./img/brand3.png" alt="" class="footer-brand ">
                    </div>
                    <div class="col">
                        <img src="./img/brand4.jpg" alt="" class="footer-brand ">
                    </div>
                    <div class="col">
                        <img src="./img/brand5.jpg" alt="" class="footer-brand ">
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__info p-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <h6 class="text-center font-weight-bold">Free & easy returns</h6>
                        <p class="text-center">Return to any Power tools Rocket store within 30 days
                            for an exchange or a full refund.</p>
                        <p class="text-center"> <a href="" class="main-btn">Learn more </a></p>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h6 class="text-center font-weight-bold">Buy online using</h6>
                        <p class="text-center">We accept the following payment methods online</p>
                        <div class="payments d-flex flex-row justify-content-center">
                            <img src="./img/p1.webp" alt="" class="img-fluid">
                            <img src="./img/p2.webp" alt="" class="img-fluid">
                            <img src="./img/p3.webp" alt="" class="img-fluid">
                            <img src="./img/p4.webp" alt="" class="img-fluid">
                            <img src="./img/p5.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <h6 class="text-center font-weight-bold">Need Help?</h6>
                        <p class="text-center">Return to any Power tools Rocket store within 30 days
                            for an exchange or a full refund.</p>
                        <p class="text-center"> <a href="" class="main-btn">Ask us a question</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__social-app p-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <h6 class="footer-social-link">Be first to know the latest deals</h6>
                        <ul class="nav justify-content-center">
                            <li class="nav-item footer-link ">
                                <i class="fab fa-facebook-f fa-2x social-icon"></i>
                            </li>
                            <li class="nav-item footer-link">
                                <i class="fab fa-twitter fa-2x social-icon1"></i>
                            </li>
                            <li class="nav-item footer-link">
                                <i class="fab fa-instagram  fa-2x social-icon1"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <h3 class="footer-social-link">Download our app</h3>
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <img src="./img/app-apple-prompt.webp" alt="">
                            </li>
                            <li class="nav-item">
                                <img src="./img/app-google-prompt.webp" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__legal p-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link footer-link" href="#">Privacy hub</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer-link" href="#">Privacy policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer-link" href="#">Cookies policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link footer-link" href="#">Terms & conditions</a>
                            </li>
                        </ul>
                        <p class="text-center footer-link"> Power tools Rocket Limited 2020. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="js/bundle.js"></script>
</body>

</html>