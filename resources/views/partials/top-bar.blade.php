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
                    <a href="{{ route('shop') }}" class="main-btn mt-2 mb-2">Go Shopping!!!</a>

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