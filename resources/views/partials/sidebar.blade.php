<aside class="shop-sidebar">
    <section class="shop-category pb-2">
        <h3 class="sidebar-title pt-2 pb-2">Categories</h3>
        <ul class="nav flex-column">
            @foreach($categories as $category)
            <li class="nav-item">
                <a  class="nav-link sidebar-link" href="/{{ $category->code }}">
                    {{$category->name}}
                    <span class="product-qty">({{$category->products->count()}})</span>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
    <section class="shop-brand pb-2">
        <h3 class="sidebar-title pt-2 pb-2">Brands</h3>
        @foreach($brands as $brand)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="brand{{$brand->id}}">
            <label class="custom-control-label sidebar-link" for="brand{{$brand->id}}">{{$brand->name}}</label></div>
        @endforeach
    </section>
    <section class="shop-battery pb-2">
        <h3 class="sidebar-title pt-2 pb-2">Battery</h3>
        @foreach($battery as $bar)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="battery{{$bar->id}}">
            <label class="custom-control-label sidebar-link" for="battery{{$bar->id}}">{{$bar->name}}</label></div>
        @endforeach
    </section>
    <section class="shop-weight pb-2">
        <h3 class="sidebar-title pt-2 pb-2">Weight</h3>
        @foreach($weight as $wei)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="weight{{$wei->id}}">
            <label class="custom-control-label sidebar-link" for="weight{{$wei->id}}">{{$wei->name}}</label></div>
        @endforeach
    </section>
    <section class="shop-gear pb-2">
        <h3 class="sidebar-title pt-2 pb-2">GearBox</h3>
        @foreach($gearBox as $gear)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="gearBox{{$gear->id}}">
            <label class="custom-control-label sidebar-link" for="gearBox{{$gear->id}}">{{$gear->name}}</label></div>
        @endforeach
    </section>
    <section class="shop-volts pb-2">
        <h3 class="sidebar-title pt-2 pb-2">Volts</h3>
        @foreach($volts as $volt)
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="volts{{$volt->id}}">
            <label class="custom-control-label sidebar-link" for="volts{{$volt->id}}">{{$volt->name}}</label></div>
        @endforeach
    </section>
    <section class="shop-price-filter">
        <h3 class="sidebar-title pt-2 pb-2">Price Filter</h3>
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
</aside>