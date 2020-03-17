<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="" class="logo-img"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
        <ul class="navbar-nav mr-auto">
            @foreach ($categories as $category)
            <li class="nav-item">
                <a class="nav-link header-link" href="/{{ $category->code }}">{{ $category->name}}</a>
            </li>
            @endforeach
        </ul>
        <form class="form-inline my-2 my-lg-0" action="">
            <input class="form-control  w-75" type="text" placeholder="Search" aria-label="Search">
            <button class="main-btn w-25" type="submit">Search</button>
        </form>
    </div>
</nav>