<div id="content" class="site-content" tabindex="-1">
    <div class="col-full">
        <div class="row">
            <nav class="woocommerce-breadcrumb">
                <a href="{{route("main")}}">Home</a>
                <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Track Order
            </nav>
            <!-- .woocommerce-breadcrumb -->
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="type-page hentry">
                        <header class="entry-header">
                            <div class="page-header-caption">
                                <h1 class="entry-title">Track Order</h1>
                            </div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content">
                            <div class="woocommerce">
                                <form class="track_order" method="post" action="">
                                    @csrf
                                    <p>To track your order please enter your Order Number and Mobile Number (that you use at the time of placing order) in the box below and press the "Track" button.</p>
                                    <p class="form-row form-row-first">
                                        <label for="orderid">Order Number</label>
                                        <input type="text" placeholder="Order Number" id="orderid" name="orderid" class="input-text">
                                    </p>
                                    <p class="form-row form-row-last">
                                        <label for="order_email">Mobile Number</label>
                                        <input type="text" placeholder="Mobile Number you used during checkout." id="order_email" name="order_email" class="input-text">
                                    </p>
                                    <div class="clear"></div>
                                    <p class="form-row">
                                        <input type="submit" class="button" name="track" value="Track" />
                                    </p>
                                </form>
                                <!-- .track_order -->
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