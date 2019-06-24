<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{route("main")}}">Home</a>
                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Winter Collection
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    @if($b->Count()=== 0)
                        <p class="cart-empty">No Product Available in this section</p>
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="javascript:void(0)">
                                Return to shop
                            </a>
                        </p>
                    @else
                        <div class="shop-control-bar">
                        <div class="handheld-sidebar-toggle">
                            <button type="button" class="btn sidebar-toggler">
                                <i class="fa fa-sliders"></i>
                                <span>Filters</span>
                            </button>
                        </div>
                        <!-- .handheld-sidebar-toggle -->
                        <h1 class="woocommerce-products-header__title page-title">Men | Winter Collection</h1>
                    </div>
                        <div class="tab-content">
                        <div id="grid-extended" class="tab-pane active" role="tabpanel">
                            <div class="woocommerce columns-7">
                                <div class="products">
                                    @foreach($b as $onsale)
                                        <div class="product ">
                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route("single.product",$onsale["product-slug"])}}">
                                                <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{asset("images/product/".$onsale["product-image"])}}">
                                                <span class="price">
                                                @if($onsale["sale-price"] === NULL)
                                                        <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                            {{$onsale["product-price"]}}
                                                </span>
                                                    @else
                                                        <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span style="color: red;">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$onsale["product-price"]}}
                                                    </span>
                                                </span>
                                                </del>
                                                        <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$onsale["sale-price"]}}
                                                </span>
                                                </ins>
                                                    @endif
                                            </span>
                                                <h2 class="woocommerce-loop-product__title">{{$onsale["product-name"]}}</h2>
                                            </a>
                                            <!-- .woocommerce-LoopProduct-link -->
                                            <span class="sku_wrapper">
                                                <span class="sku" style="color: #62AB00">
                                                    Color: {{$onsale["color"]}}
                                                </span>
                                            </span>
                                            <h2 class="woocommerce-loop-product__title">Code: {{$onsale["product-code"]}}</h2>
                                            @if($onsale["product-quantity"] <= 0)
                                                <a class="button product_type_simple add_to_cart_button"  disabled>Out of Stock</a>
                                            @else
                                                <a class="button product_type_simple add_to_cart_button" href="{{route("addCart",$onsale["id"])}}">Add to cart</a>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                <!-- .products -->
                            </div>
                        </div>
                    </div>
                    @endif
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>