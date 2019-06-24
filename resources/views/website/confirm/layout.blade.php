<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{route("main")}}">Home</a>
                <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Order received
            </nav>
            <!-- .woocommerce-breadcrumb -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="page hentry">

                        <div class="entry-content">
                            <div class="woocommerce">
                                <div class="woocommerce-order">

                                    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.<br/>You will receive sms for your order confirmation. You can track your order using order number. Your order number is <b>{{$receive}}</b></p>
                                </div>
                                <!-- .woocommerce-order -->
                            </div>
                            <!-- .woocommerce -->
                        </div>
                        <!-- .entry-content -->
                    </div>
                    <!-- .hentry -->
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- .row -->
    </div>
    <!-- .col-full -->
</div>