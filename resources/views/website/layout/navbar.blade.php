<div class="top-bar top-bar-v9" style="background-color:#62AB00">
    <div class="col-full">
        <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
            <li class="menu-item animate-dropdown">
                <a title="Kamalia Khaddi - Always free delivery" href="javascript:void(0)">Kamalia Khaddi &#8211; Always free delivery</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Quality Guarantee of products" href="javascript:void(0)">Quality Guarantee of products</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="Fast returnings program" href="{{route("return.policy")}}">Return Policy</a>
            </li>
            <li class="menu-item animate-dropdown">
                <a title="No additional fees" href="{{route("order-tracking-form")}}"><i class="tm tm-order-tracking"></i>Track Your Order</a></a>
            </li>
        </ul>
    </div>
    <!-- .col-full -->
</div>
<header id="masthead" class="site-header header-v8" style="background-image: none; ">
        <div class="col-full desktop-only">
            <div class="@yield('sticky-wrap')">
                <div class="row" style="">
                    <div class="site-branding" style="height: 100% !important;">
                        <a href="{{ route('main') }}" class="custom-logo-link" rel="home">
                            <img src="{{asset('/images/website/logos/logo2.png')}}" alt="Kamalia Khaddi" width="475px" height="70px" style="">
                        </a>
                        <!-- /.custom-logo-link -->
                    </div>
                    <nav id="primary-navigation" class="primary-navigation" aria-label="Primary Navigation" data-nav="flex-menu">
                        <ul id="menu-primary-menu" class="nav yamm">

                            <li class="yamm-fw menu-item animate-dropdown {{ Nav::isRoute('main',$activeclass='sale-clr') }}">
                                <a title="Home" href="{{route('main')}}">Home</a>
                            </li>

                            <li class="menu-item menu-item-has-children animate-dropdown dropdown {{Nav::hasSegment("winter",1,"sale-clr")}}">
                                <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Winter Collection<span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown {{Nav::isRoute("men.winter",$activeclass='slae-clr')}}">
                                        <a title="Men" href="{{route("men.winter")}}">Men</a>
                                    </li>
                                    <li class="menu-item animate-dropdown {{Nav::isRoute("women")}}">
                                        <a title="Women" href="{{route("women.winter")}}">Women</a>
                                    </li>
                                    <li class="menu-item animate-dropdown {{Nav::isRoute("kurta")}}">
                                        <a title="Kurta" href="{{route("kurta.winter")}}">Kurta</a>
                                    </li>
                                </ul>
                                <!-- .dropdown-menu -->
                            </li>
                            <li class="menu-item menu-item-has-children animate-dropdown dropdown {{Nav::hasSegment("summer",1,"sale-clr")}}">
                                <a title="Mother`s Day" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" href="#">Summer Collection<span class="caret"></span></a>
                                <ul role="menu" class=" dropdown-menu">
                                    <li class="menu-item animate-dropdown">
                                        <a title="Men" href="{{route("men.summer")}}">Men</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Women" href="{{route("women.summer")}}">Women</a>
                                    </li>
                                    <li class="menu-item animate-dropdown">
                                        <a title="Kurta" href="{{route("kurta.summer")}}">Kurta</a>
                                    </li>
                                </ul>
                                <!-- .dropdown-menu -->
                            </li>
                            <li class="yamm-fw menu-item animate-dropdown {{Nav::isRoute("onSale",$activeclass="sale-clr")}}">
                                <a title="On Sale" href="{{route("onSale")}}">On Sale</a>
                            </li>
                            <li class=" yamm-fw menu-item animate-dropdown {{Nav::isRoute("about.us",$activeclass="sale-clr")}}">
                                <a title="About US" href="{{route("about.us")}}">About Us</a>
                            </li>
                            <li class=" yamm-fw menu-item animate-dropdown">
                                <a title="Contact Us" href="">Contact Us</a>
                            </li>

                            <li class="techmarket-flex-more-menu-item dropdown">
                                <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                <ul class="overflow-items dropdown-menu"></ul>
                                <!-- . -->
                            </li>
                        </ul>
                        <!-- .nav -->
                    </nav>

                    <!-- .header-wishlist -->
                        <ul id="site-header-cart" class="site-header-cart menu">
                            <li class="animate-dropdown dropdown {{ Nav::isRoute('cart',$activeclass='sale-clr') }}">
                                <a class="cart-contents" href="" data-toggle="dropdown" title="View your shopping cart">
                                    <i class="tm tm-shopping-bag"></i>
                                    <span class="count">{{Cart::count()}}</span>
                                    <span class="amount">
                                        <span class="price-label">Your Cart</span>
                                        Rs:{{Cart::subtotal()}}
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-mini-cart">
                                    <li>
                                        <div class="widget woocommerce widget_shopping_cart">
                                            @if(Cart::count()=== 0)
                                                <p style="text-align: center">No Product in the Cart</p>
                                            @else
                                            <div class="widget_shopping_cart_content">
                                                <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                    @foreach(Cart::content() as $cart)
                                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                                            <a href="{{route('removeItem',$cart->rowId)}}" class="remove" aria-label="Remove this item" data-product_id="65" data-product_sku="">×</a>
                                                            <a href="single-product-sidebar.html">
                                                                <img src="{{asset("images/product/".$cart->options->image)}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="">{{$cart->name}}&nbsp;
                                                            </a>
                                                            <span class="quantity">{{$cart->qty}}×
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">Rs </span>{{$cart->subtotal}}</span>
                                                                </span>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <!-- .cart_list -->
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Total:</strong>
                                                    <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">Rs </span>{{Cart::subtotal()}}</span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="{{route('cart')}}" class="button wc-forward">View cart</a>
                                                    <a href="{{route("website.checkout")}}" class="button checkout wc-forward">Checkout</a>
                                                </p>
                                            </div>
                                            @endif
                                            <!-- .widget_shopping_cart_content -->
                                        </div>
                                        <!-- .widget_shopping_cart -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    <!-- .site-header-cart -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.techmarket-sticky-wrap -->
        </div>
        <!-- .col-full -->
        <!-- HandHeld Navigation-->
        @include('website.layout.handheld')
    </header>

