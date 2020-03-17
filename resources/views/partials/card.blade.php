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