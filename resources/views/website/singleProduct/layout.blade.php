<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{route("main")}}">Home</a>
                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$single["product-name"]}}
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="product product-type-simple">
                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper thumb-count-4">
                                 @if($single["sale-price"] !== NULL)
                                <span class="onsale">-
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">
                                            Rs
                                        </span>
                                        {{$single["product-price"]-$single["sale-price"]}}
                                    </span>
                                </span>
                                @endif
                                <!-- .onsale -->
                                <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">

                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                            <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                            <figure class="woocommerce-product-gallery__wrapper ">

                                                    <a href="javascript:void(0)" tabindex="0">
                                                        <img width="600" height="600" src="{{asset("images/product/".$single["product-image"])}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" data-zoom-image="{{asset("images/product/".$single["product-image"])}}" id="zoom-img">
                                                    </a>

                                            </figure>
                                        </div>
                                        <!-- .woocommerce-product-gallery -->

                                    <!-- .techmarket-single-product-gallery-images -->

                                    <!-- .techmarket-single-product-gallery-thumbnails -->
                                </div>
                                <!-- .techmarket-single-product-gallery -->
                            </div>
                            <!-- .product-images-wrapper -->
                            <div class="summary entry-summary">
                                <div class="single-product-header">
                                    <h1 class="product_title entry-title">{{$single["product-name"]}}</h1>
                                </div>
                                <!-- .single-product-header -->
                                <div class="single-product-meta">
                                    <div class="brand">
                                    </div>
                                    <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag" href="">{{$single->catagories->catagory_name}}</a>
                                                    </span>
                                        <span class="sku_wrapper dark-code">Product Code:
                                                        <span class="sku">{{$single["product-code"]}}</span>
                                                    </span>
                                    </div>
                                        @if($single['product-quantity'] <= 0)
                                            <div class="product-label">
                                                <div class="ribbon label red-label ribbon-out-of-stock">
                                                    <span style="margin-left: -30px">Out of Stock</span>
                                                </div>
                                            </div>
                                        @else
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>In Stock</span>
                                            </div>
                                        </div>
                                        @endif
                                </div>
                                <!-- .single-product-meta -->
                                <div class="rating-and-sharing-wrapper">
                                    <div class="woocommerce-product-rating">

                                    </div>
                                </div>
                                <!-- .rating-and-sharing-wrapper -->
                                <div class="woocommerce-product-details__short-description">
                                    <ul>
                                        {{$single["small-desc"]}}
                                    </ul>
                                </div>
                                <!-- .woocommerce-product-details__short-description -->
                                <div class="product-actions-wrapper">
                                    <div class="product-actions">
                                        <p class="price">
                                            @if($single["sale-price"] === NULL)
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$single["product-price"]}}
                                                </span>
                                            @else
                                                <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span style="color: red;">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$single["product-price"]}}
                                                    </span>
                                                </span>
                                                </del>
                                                <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$single["sale-price"]}}
                                                </span>
                                                </ins>
                                            @endif
                                        </p>
                                        <!-- .single-product-header -->
                                        <form action="{{route("addProducts")}}" method="post" class="cart">
                                            @csrf
                                            <input type="number" hidden name="product" value="{{$single["id"]}}">
                                            <div class="quantity">
                                                <label for="quantity-input">Quantity</label>
                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" id="quantity-input" min="1">
                                            </div>
                                            <!-- .quantity -->
                                            @if($single['product-quantity'] <=0)
                                                <button class="single_add_to_cart_button button alt" value="185" name="add-to-cart" type="button" disabled>Out of Stock</button>
                                            @else
                                            <button class="single_add_to_cart_button button alt" value="185" name="add-to-cart" type="submit">Add to cart</button>
                                            @endif
                                        </form>
                                        <!-- .cart -->
                                    </div>
                                    <!-- .product-actions -->
                                </div>
                                <!-- .product-actions-wrapper -->
                            </div>
                            <!-- .entry-summary -->
                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul role="tablist" class="nav tabs wc-tabs">
                                <li class="nav-item description_tab">
                                    <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Description</a>
                                </li>
                            </ul>
                            <!-- /.ec-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane panel wc-tab active" id="tab-description" role="tabpanel">
                                    {!! html_entity_decode($single["full-desc"]) !!}
                                </div>
                            </div>

                        </div>
                        <!-- .single-product-wrapper -->
                        <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <section class="related">
                                <header class="section-header">
                                    <h2 class="section-title">Related products</h2>
                                    <nav class="custom-slick-nav"></nav>
                                </header>
                                <!-- .section-header -->
                                <div class="products">
                                    @foreach($related as $relatedProduct)
                                    <div class="product">
                                        <a href="{{route("single.product",$relatedProduct["product-slug"])}}" class="woocommerce-LoopProduct-link">
                                            <img src="{{asset("images/product/".$relatedProduct["product-image"])}}" width="224" height="197" class="wp-post-image lazy" alt="">
                                            <span class="price">
                                                @if($relatedProduct["sale-price"] === NULL)
                                                    <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$relatedProduct["product-price"]}}
                                                </span>
                                                @else
                                                    <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span style="color: red;">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$relatedProduct["product-price"]}}
                                                    </span>
                                                </span>
                                                </del>
                                                    <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$relatedProduct["sale-price"]}}
                                                </span>
                                                </ins>
                                                @endif
                                            </span>
                                            <!-- /.price -->
                                            <h2 class="woocommerce-loop-product__title">{{$relatedProduct["product-name"]}}</h2>
                                        </a>
                                        <span class="sku_wrapper">
                                            <span class="sku">
                                                {{$relatedProduct["product-code"]}}
                                            </span>
                                        </span>
                                        <div class="hover-area">
                                            <a class="button add_to_cart_button" href="{{route("addCart", $relatedProduct["id"])}}" rel="nofollow">Add to cart</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </section>
                            <!-- .single-product-wrapper -->
                        </div>
                        <!-- .tm-related-products-carousel -->
                    </div>
                    <!-- .product -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>