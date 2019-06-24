<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ Nav::isRoute('home'),$activeclass="active" }}">
                <a href="{{route("home")}}">
                    <i class="la la-home"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class=" nav-item {{Nav::isResource('orders')}}"><a href="#"><i class="la la-opencart "></i><span class="menu-title" data-i18n="nav.templates.main">Orders</span></a>
                <ul class="menu-content">
                    <li class="{{Nav::isRoute('allOrder')}}"><a class="menu-item" href="{{route("allOrder")}}" data-i18n="nav.templates.vert.classic_menu">Orders</a>
                    </li>
                    <li class="{{Nav::isRoute('newOrder')}}"><a class="menu-item" href="{{route("newOrder")}}" data-i18n="nav.templates.vert.classic_menu">New Orders</a>
                    </li>
                    <li class="{{Nav::isRoute('dispatchOrder')}}"><a class="menu-item" href="{{route("dispatchOrder")}}" data-i18n="nav.templates.vert.compact_menu">Dispatched Orders</a>
                    </li>
                    <li class="{{Nav::isRoute('completedOrder')}}"><a class="menu-item" href="{{route("completedOrder")}}" data-i18n="nav.templates.vert.compact_menu">Completed Orders</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{Nav::isResource('product')}}"><a href="#"><i class="la la-tags"></i><span class="menu-title" data-i18n="nav.templates.main">Products</span></a>
                <ul class="menu-content">
                    <li class="{{Nav::isRoute('viewProduct')}}">
                        <a class="menu-item" href="{{route("viewProduct")}}" data-i18n="nav.templates.vert.classic_menu">View Products</a>
                    </li>
                    <li class="{{Nav::isRoute('addProduct')}}">
                        <a class="menu-item" href="{{route("addProduct")}}">Add New Product</a>
                    </li>
                    <li class="{{Nav::isRoute('product.outofstock')}}">
                        <a class="menu-item" href="{{route("product.outofstock")}}" data-i18n="nav.templates.vert.compact_menu">Out of Stock Products</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item {{Nav::isRoute('slider.view')}}">
                <a href="{{route("slider.view")}}">
                    <i class="la la-sliders"></i>
                    <span class="menu-title">Slider</span>
                </a>
            </li>
            <li class=" nav-item {{Nav::isRoute('getBanner')}}">
                <a href="{{route("getBanner")}}">
                    <i class="la la-image "></i>
                    <span class="menu-title">Banners</span>
                </a>
            </li>
            <li class=" nav-item">
                <a href="">
                    <i class="la la-user "></i>
                    <span class="menu-title">User</span>
                </a>
            </li>
            <li class=" nav-item"><a href="#"><i class="la  la-gear"></i><span class="menu-title" data-i18n="nav.templates.main">Settings</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="" data-i18n="nav.templates.vert.classic_menu">New Orders</a>
                    </li>
                    <li><a class="menu-item" href="">Pending Orders</a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.templates.vert.compact_menu">Dispatched Orders</a>
                    </li>
                    <li><a class="menu-item" href="" data-i18n="nav.templates.vert.compact_menu">Completed Orders</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>