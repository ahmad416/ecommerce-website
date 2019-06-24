<div class="content-area" id="primary">
    <main class="site-main" id="main">
        <div class="type-page hentry">
            <div class="entry-content">
                <div class="woocommerce">
                    <form action="{{route("checkout")}}" class="checkout woocommerce-checkout" method="post" name="checkout">
                        @csrf
                        <div id="customer_details" class="col2-set">
                            <div class="col-1">
                                <div class="woocommerce-billing-fields">
                                    <h3>Billing Details</h3>
                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p id="billing_company_field" class="form-row form-row-wide validate-required validate-email">
                                                <label class="" for="name">Full Name </label>
                                                <abbr title="required" class="required">*</abbr>
                                                <input type="text" value="{{old("billing_name")}}" placeholder="Enter your Name" id="name" name="billing_name" class="input-text" required>
                                                @if ($errors->has('billing_name'))
                                                    <span style="color: red" role="alert">
                                                        <strong>{{ $errors->first('billing_name') }}</strong>
                                                    </span>
                                                @endif
                                            </p>
                                            <div class="clear"></div>
                                            <p id="billing_email_field" class="form-row form-row-first">
                                                <label class="" for="billing_email">Email Address
                                                </label>
                                                <input type="email" value="{{old("billing_email")}}" placeholder="Email Address" id="billing_email" name="billing_email" class="input-text">
                                            </p>
                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Phone
                                                    <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="tel" value="{{old("billing_phone")}}" placeholder="e.g: 03331234567" id="billing_phone" name="billing_phone" class="input-text" required>
                                                @if ($errors->has('billing_phone'))
                                                    <span style="color: red" role="alert">
                                                        <strong>{{ $errors->first('billing_phone') }}</strong>
                                                    </span>
                                                @endif
                                            </p>
                                            <div class="clear"></div>
                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Town / City
                                                    <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="{{old("billing_city")}}" placeholder="Enter your city Name" id="billing_city" name="billing_city" class="input-text" required>
                                                @if ($errors->has('billing_city'))
                                                    <span style="color: red" role="alert">
                                                        <strong>{{ $errors->first('billing_city') }}</strong>
                                                    </span>
                                                @endif
                                            </p>
                                            <div class="clear"></div>
                                            <p id="order_comments_field" class="form-row notes">
                                                <label class="" for="order_address">
                                                    Shipping Address
                                                    <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <textarea cols="5" rows="4" placeholder="Shipping Address" id="order_address" class="input-text " name="order_address" required></textarea>
                                                @if ($errors->has('order_address'))
                                                    <span style="color: red" role="alert">
                                                        <strong>{{ $errors->first('order_address') }}</strong>
                                                    </span>
                                                @endif
                                            </p>
                                            <div class="clear"></div>
                                            <p id="order_comments_field" class="form-row notes">
                                                <label class="" for="order_comments">Order notes</label>
                                                <textarea cols="5" rows="3" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                </div>
                                <!-- .woocommerce-billing-fields -->
                            </div>
                            <!-- .col-1 -->
                        </div>
                        <!-- .col2-set -->
                        <h3 id="order_review_heading">Your order</h3>
                        <div class="woocommerce-checkout-review-order" id="order_review">
                            <div class="order-review-wrapper">
                                <h3 class="order_review_heading">Your Order</h3>
                                <table class="shop_table woocommerce-checkout-review-order-table">
                                    <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $pro)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <strong class="product-quantity">{{$pro->qty}} ×</strong> {{$pro->name}}&nbsp;
                                        </td>
                                        <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span class="woocommerce-Price-currencySymbol">Rs </span>{{$pro->subtotal}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">
                                                        Rs
                                                    </span>
                                                    {{Cart::subtotal()}}
                                                </span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <!-- /.woocommerce-checkout-review-order-table -->
                                <div class="woocommerce-checkout-payment" id="payment">
                                    <div class="form-row place-order">
                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="{{route("return.policy")}}">return &amp; exchange policy</a></span>
                                                <span class="required">*</span>
                                            </label>
                                            @if ($errors->has('terms'))
                                                <span style="color: red" role="alert">
                                                        <strong>{{ $errors->first('terms') }}</strong>
                                                    </span>
                                            @endif
                                        </p>
                                        <button class="button wc-forward text-center" type="submit">Place order</button>
                                    </div>
                                </div>
                                <!-- /.woocommerce-checkout-payment -->
                            </div>
                            <!-- /.order-review-wrapper -->
                        </div>
                        <!-- .woocommerce-checkout-review-order -->
                    </form>
                    <!-- .woocommerce-checkout -->
                </div>
                <!-- .woocommerce -->
            </div>
            <!-- .entry-content -->
        </div>
        <!-- #post-## -->
    </main>
    <!-- #main -->
</div>