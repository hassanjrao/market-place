<div class="user-dash-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-dash-nav-menus">
                    <nav>
                        <ul>
                            <li class="{{ request()->segment(1) == 'profile' ? ' active' : '' }}"><a href="{{ route("profile.index") }}">Profile</a></li>
                            <li  class="{{ request()->segment(1) == 'products' ? ' active' : '' }}"><a href="{{ route("products.user") }}">Products</a></li>
                            <li class="{{ request()->segment(1) == 'orders' ? ' active' : '' }}"><a href="{{ route("orders.user") }}">Orders </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
