<div class="container">
    <div class="row">
        <div class="col-6 me-auto mt-3">
            <p>free shipping on all orders 75$</p>
        </div>
        <div class="col-6 mt-3">
            <ul class="nav justify-content-end">
                
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('admin.dashboard') }}">My
                            Account</a>
                    </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('wishlist.index') }}">Wishlist<i
                            class="fa fa-heart"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('cart') }}">My cart<i class="fa fa-shopping-cart"></i></a>
                </li>

            </ul>
        </div>
    </div>
    <div>
        <form class="d-flex w-50 mb-3" action="/search">
            <input class="form-control me-2 search-box " id="search-product" type="text" name="query"
                placeholder="Search product">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

</div>
