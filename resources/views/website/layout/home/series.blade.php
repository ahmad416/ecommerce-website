<section class="section-products-carousel-tabs tab-wrap carousel-tab-wrap">
    <div class="section-products-carousel-tabs-wrap">
        <header class="section-header">
            <h2 class="section-title">Diamond Series</h2>
            <ul role="tablist" class="nav justify-content-center">
            </ul>
        </header>
        <div class="tab-content">
            <div id="tab-59f89f0ac71c90" class="tab-pane active" role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">
                                @foreach($daimond as $product)
                                <div class="product">
                                    <a href="{{ route("single.product",$product['product-slug']) }}" class="woocommerce-LoopProduct-link">
                                        <img src="{{asset("/images/product/".$product['product-image'])}}" class="wp-post-image lazy" alt="">
                                        <span class="price">
                                                @if($product["sale-price"] === NULL)
                                                    <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$product["product-price"]}}
                                                </span>
                                                @else
                                                    <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span style="color: red;">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$product["product-price"]}}
                                                    </span>
                                                </span>
                                                </del>
                                                    <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$product["sale-price"]}}
                                                </span>
                                                </ins>
                                                @endif
                                            </span>
                                        <!-- /.price -->
                                        <h2 class="woocommerce-loop-product__title" style="height: 26px !important">{{$product['product-name']}}</h2>
                                        <span class="sku_wrapper" style="margin-top: -10px">
                                            <span class="sku">
                                                Color: {{$product["color"]}}
                                            </span>
                                        </span>
                                    </a>
                                    <div class="techmarket-product-rating dark-code">
                                        Code: {{$product["product-code"]}}
                                    </div>
                                    <div class="hover-area">
                                        @if($product["product-quantity"] <= 0)
                                            <a class="button add_to_cart_button" href="javascript:void(0)" rel="nofollow"  style="color: red; border-color: red;">Out of Stock</a>
                                        @else
                                            <a class="button add_to_cart_button" href="{{route('addCart',$product['id'])}}" rel="nofollow">Add to cart</a>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->

        </div>
    </div>
</section>
@if($gold->count() <= 0)
@else
<section class="section-products-carousel-tabs tab-wrap carousel-tab-wrap">
    <div class="section-products-carousel-tabs-wrap">
        <header class="section-header">
            <h2 class="section-title">Gold Series</h2>
            <ul role="tablist" class="nav justify-content-center">
            </ul>
        </header>
        <div class="tab-content">
            <div id="tab-59f89f0ac71c90" class="tab-pane active" role="tabpanel">
                <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                    <div class="container-fluid">
                        <div class="woocommerce columns-5">
                            <div class="products">
                                @foreach($gold as $goldseries)
                                    <div class="product">
                                        <a href="{{route("single.product",$goldseries["product-slug"])}}" class="woocommerce-LoopProduct-link">
                                            <img src="{{asset("/images/product/".$goldseries['product-image'])}}" class="wp-post-image lazy" alt="">
                                            <span class="price">
                                                @if($goldseries["sale-price"] === NULL)
                                                        <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                            {{$goldseries["product-price"]}}
                                                </span>
                                                    @else
                                                        <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span style="color: red;">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                        {{$goldseries["product-price"]}}
                                                    </span>
                                                </span>
                                                </del>
                                                        <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{$goldseries["sale-price"]}}
                                                </span>
                                                </ins>
                                                    @endif
                                            </span>

                                            <!-- /.price -->
                                            <h2 class="woocommerce-loop-product__title" style="height: 26px !important">{{$goldseries['product-name']}}</h2>
                                            <span class="sku_wrapper" style="margin-top: -10px">
                                            <span class="sku">
                                                Color: {{$goldseries["color"]}}
                                            </span>
                                        </span>
                                        </a>
                                        <div class="techmarket-product-rating dark-code">
                                            Code: {{$goldseries['product-code']}}
                                        </div>
                                        <div class="hover-area">
                                            @if($goldseries["product-quantity"] <= 0)
                                                <a class="button add_to_cart_button" href="javascript:void(0)" style="color: red; border-color: red;"   rel="nofollow" disabled>Out of Stock</a>
                                            @else
                                                <a class="button add_to_cart_button" href="{{route('addCart',$goldseries['id'])}}" rel="nofollow">Add to cart</a>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- .woocommerce -->
                    </div>
                    <!-- .container-fluid -->
                </div>
                <!-- .products-carousel -->
            </div>
            <!-- .tab-pane -->

        </div>
    </div>
</section>
@endif
{{--<section class="section-products-carousel-tabs tab-wrap carousel-tab-wrap">--}}
    {{--<div class="section-products-carousel-tabs-wrap">--}}
        {{--<header class="section-header">--}}
            {{--<h2 class="section-title">Silver Series</h2>--}}
            {{--<ul role="tablist" class="nav justify-content-center">--}}
            {{--</ul>--}}
        {{--</header>--}}
        {{--<div class="tab-content">--}}
            {{--<div id="tab-59f89f0ac71c90" class="tab-pane active" role="tabpanel">--}}
                {{--<div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:766,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">--}}
                    {{--<div class="container-fluid">--}}
                        {{--<div class="woocommerce columns-5">--}}
                            {{--<div class="products">--}}
                                {{--@foreach($silver as $silverseries)--}}
                                    {{--<div class="product">--}}
                                        {{--<a href="{{route("single.product",$silverseries["product-slug"])}}" class="woocommerce-LoopProduct-link">--}}
                                            {{--<img src="{{asset("/images/product/".$silverseries['product-image'])}}" class="wp-post-image lazy" alt="">--}}
                                            {{--<span class="price">--}}
                                                {{--@if($silverseries["sale-price"] === NULL)--}}
                                                    {{--<span class="woocommerce-Price-amount amount">--}}
                                                    {{--<span class="woocommerce-Price-currencySymbol">--}}
                                                        {{--Rs--}}
                                                    {{--</span>--}}
                                                        {{--{{$silverseries["product-price"]}}--}}
                                                {{--</span>--}}
                                                {{--@else--}}
                                                    {{--<del>--}}
                                                {{--<span class="woocommerce-Price-amount amount">--}}
                                                    {{--<span style="color: red;">--}}
                                                    {{--<span class="woocommerce-Price-currencySymbol">--}}
                                                        {{--Rs--}}
                                                    {{--</span>--}}
                                                        {{--{{$silverseries["product-price"]}}--}}
                                                    {{--</span>--}}
                                                {{--</span>--}}
                                                {{--</del>--}}
                                                    {{--<ins>--}}
                                                {{--<span class="woocommerce-Price-amount amount">--}}
                                                    {{--<span class="woocommerce-Price-currencySymbol">--}}
                                                        {{--Rs--}}
                                                    {{--</span>--}}
                                                    {{--{{$silverseries["sale-price"]}}--}}
                                                {{--</span>--}}
                                                {{--</ins>--}}
                                                {{--@endif--}}
                                            {{--</span>--}}

                                            {{--<!-- /.price -->--}}
                                            {{--<h2 class="woocommerce-loop-product__title" style="height: 26px !important">{{$silverseries['product-name']}}</h2>--}}
                                            {{--<span class="sku_wrapper" style="margin-top: -10px">--}}
                                            {{--<span class="sku">--}}
                                                {{--Color: {{$silverseries["color"]}}--}}
                                            {{--</span>--}}
                                        {{--</span>--}}
                                        {{--</a>--}}
                                        {{--<div class="techmarket-product-rating dark-code">--}}
                                            {{--Code: {{$silverseries['product-code']}}--}}
                                        {{--</div>--}}
                                        {{--<div class="hover-area">--}}
                                            {{--@if($silverseries["product-quantity"] == 0)--}}
                                                {{--<a class="button add_to_cart_button" style="pointer-events: none" rel="nofollow" disabled="">Out of Stock</a>--}}
                                            {{--@else--}}
                                                {{--<a class="button add_to_cart_button" href="{{route('addCart',$silverseries['id'])}}" rel="nofollow">Add to cart</a>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endforeach--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- .woocommerce -->--}}
                    {{--</div>--}}
                    {{--<!-- .container-fluid -->--}}
                {{--</div>--}}
                {{--<!-- .products-carousel -->--}}
            {{--</div>--}}
            {{--<!-- .tab-pane -->--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
