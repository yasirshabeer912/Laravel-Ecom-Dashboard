 <!-- MENU SIDEBAR-->
 <aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <a href="{{url('admin/dashboard')}}">
                <li class="{{ Request:: is('admin/dashboard') ? 'active ' : ''}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="{{ Request:: is('admin/category') ? 'active ' : ''}} {{ Request:: is('admin/add-category') ? 'active ' : ''}}">
                    <a class="js-arrow " href="#">
                        <i class="fas fa-list"></i>Category</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('admin/add-category')}}">Add Category</a>
                          
                        </li>
                        <li>
                            <a href="{{ url('admin/category')}}">View Category</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{ Request:: is('admin/coupon') ? 'active ' : ''}} {{ Request:: is('admin/add-coupon') ? 'active ' : ''}}">
                    <a class="js-arrow " href="#">
                        <i class="fas fa-tag"></i>Coupon</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('admin/add-coupon')}}">Add coupon</a>
                          
                        </li>
                        <li>
                            <a href="{{ url('admin/coupon')}}">View coupon</a>
                        </li>
                        
                    </ul>
                </li>

                <li class="{{ Request:: is('admin/size') ? 'active ' : ''}} {{ Request:: is('admin/add-size') ? 'active ' : ''}}">
                    <a class="js-arrow " href="#">
                        <i class="fas fa-window-maximize"></i>Size</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('admin/add-size')}}">Add size</a>
                          
                        </li>
                        <li>
                            <a href="{{ url('admin/size')}}">View size</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{ Request:: is('admin/color') ? 'active ' : ''}} {{ Request:: is('admin/add-color') ? 'active ' : ''}}">
                    <a class="js-arrow " href="#">
                        <i class="fas fa-paint-brush"></i>Color</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('admin/add-color')}}">Add color</a>
                          
                        </li>
                        <li>
                            <a href="{{ url('admin/color')}}">View color</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="{{ Request:: is('admin/product') ? 'active ' : ''}} {{ Request:: is('admin/add-product') ? 'active ' : ''}}">
                    <a class="js-arrow " href="#">
                        <i class="fas fa-shopping-basket"></i>Product</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('admin/add-product')}}">Add product</a>
                          
                        </li>
                        <li>
                            <a href="{{ url('admin/product')}}">View product</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->