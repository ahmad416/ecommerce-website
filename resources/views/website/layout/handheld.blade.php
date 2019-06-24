<div class="col-full handheld-only">
    <div class="handheld-header">
        <!-- /.row -->
        <div class="techmarket-sticky-wrap">
            <div class="row">
                <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                    <button class="btn navbar-toggler" type="button">
                        <i class="tm tm-departments-thin"></i>
                        <span>Menu</span>
                    </button>
                    <div class="handheld-navigation-menu">
                        <span class="tmhm-close">Close</span>
                        <ul id="menu-departments-menu-1" class="nav">
                            <li class="highlight menu-item animate-dropdown">
                                <a title="Value of the Day" href="{{route("main")}}">Home</a>
                            </li>

                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Winter Collection<span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                        <div class="yamm-content">
                                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="kc-col-container">
                                                    <div class="kc_single_image">
                                                        <img src="" class="" alt="" />
                                                    </div>
                                                    <!-- .kc_single_image -->
                                                </div>
                                                <!-- .kc-col-container -->
                                            </div>
                                            <!-- .bg-yamm-content -->
                                            <div class="row yamm-content-row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="kc-col-container">
                                                        <div class="kc_text_block">
                                                            <ul>
                                                                <li class="nav-title">Winter Collection</li>
                                                                <li><a href="{{route("men.winter")}}">Men</a></li>
                                                                <li><a href="{{route("women.winter")}}">Women</a></li>
                                                                <li><a href="{{route("kurta.winter")}}">Kurta</a></li>
                                                                <li class="nav-divider"></li>
                                                            </ul>
                                                        </div>
                                                        <!-- .kc_text_block -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .kc_column -->
                                            </div>
                                            <!-- .kc_row -->
                                        </div>
                                        <!-- .yamm-content -->
                                    </li>
                                </ul>
                            </li>
                            <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown-submenu">
                                <a title="Computers &amp; Laptops" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Summer Collection<span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item menu-item-object-static_block animate-dropdown">
                                        <div class="yamm-content">
                                            <div class="bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                <div class="kc-col-container">
                                                    <div class="kc_single_image">
                                                        <img src="" class="" alt="" />
                                                    </div>
                                                    <!-- .kc_single_image -->
                                                </div>
                                                <!-- .kc-col-container -->
                                            </div>
                                            <!-- .bg-yamm-content -->
                                            <div class="row yamm-content-row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="kc-col-container">
                                                        <div class="kc_text_block">
                                                            <ul>
                                                                <li class="nav-title">Summer Collection</li>
                                                                <li><a href="{{route("men.summer")}}">Men</a></li>
                                                                <li><a href="{{route("women.summer")}}">Women</a></li>
                                                                <li><a href="{{route("kurta.summer")}}">Kurta</a></li>
                                                                <li class="nav-divider"></li>
                                                            </ul>
                                                        </div>
                                                        <!-- .kc_text_block -->
                                                    </div>
                                                    <!-- .kc-col-container -->
                                                </div>
                                                <!-- .kc_column -->
                                            </div>
                                            <!-- .kc_row -->
                                        </div>
                                        <!-- .yamm-content -->
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item animate-dropdown">
                                <a title="Gadgets" href="{{route("onSale")}}">On sale</a>
                            </li>
                            <li class="menu-item animate-dropdown">
                                <a title="Gadgets" href="{{route("about.us")}}">About Us</a>
                            </li>
                            <li class="menu-item animate-dropdown">
                                <a title="Virtual Reality" href="">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .handheld-navigation-menu -->
                </nav>
                <!-- .handheld-navigation -->
                <div class="site-search">
                    <div class="widget woocommerce widget_product_search">
                        <a href="{{route("main")}}" class="custom-logo-link" rel="home">
                            <img src="{{asset("images/website/logos/mobile-logo.png")}}" alt="Kamalia Khaddi"  width="85%" style="margin-left: 7%"/>
                        </a>
                    </div>
                    <!-- .widget -->
                </div>
                <!-- .site-search -->
                <a class="handheld-header-cart-link has-icon" href="{{route("cart")}}" title="View your shopping cart">
                    <i class="tm tm-shopping-bag"></i>
                    <span class="count">{{ Cart::count()}}</span>
                </a>
            </div>
            <!-- /.row -->
        </div>
        <!-- .techmarket-sticky-wrap -->
    </div>
    <!-- .handheld-header -->
</div>