<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="type-page hentry">
            <div class="entry-content">
                <div class="woocommerce">
                    @if(Cart::count() == 0)
                        <p class="cart-empty">Your cart is currently empty.</p>
                        <p class="return-to-shop">
                            <a class="button wc-backward" href="javascript:void(0)">
                                Return to shop
                            </a>
                        </p>
                    @else
                    <div class="cart-wrapper">
                        <div  class="woocommerce-cart-form">
                            <table class="shop_table shop_table_responsive cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-quantity">Update</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $pro)
                                <tr>
                                    <td class="product-remove">
                                        <a class="remove" href="#">×</a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a href="javascript:void(0)">
                                            <img width="180" height="180" alt="" class="wp-post-image" src="{{asset("images/product/".$pro->options->image)}}">
                                        </a>
                                    </td>
                                    <td data-title="Product" class="product-name">
                                        <div class="media cart-item-product-detail">
                                            <a href="">
                                                <img width="180" height="180" alt="" class="wp-post-image" src="{{asset("images/product/".$pro->options->image)}}">
                                            </a>
                                            <div class="media-body align-self-center">
                                                <a href="javascript:void(0)">{{$pro->name}}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-title="Price" class="product-price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">
                                                Rs
                                            </span>
                                            {{$pro->price}}
                                        </span>
                                    </td>
                                    <form action="{{route("updateItem",$pro->rowId)}}" method="post">
                                        @csrf
                                        <input type="text" name="rowid" hidden value="{{$pro->rowId}}">
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <label for="quantity-input-1">Quantity</label>
                                                <input id="quantity-input-1" type="number" name="quantity" value="{{$pro->qty}}" title="Qty" class="input-text qty text" size="4">
                                            </div>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="submit" value="Update cart" name="update_cart" class="button">
                                            </div>
                                        </td>
                                    </form>
                                    <td data-title="Total" class="product-subtotal">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">
                                                Rs
                                            </span>
                                            {{$pro->subtotal}}
                                        </span>
                                        <a title="Remove this item" class="remove" href="{{route("removeItem",$pro->rowId)}}">×</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- .shop_table shop_table_responsive -->
                        </div>
                        <!-- .woocommerce-cart-form -->
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h2 style="border-bottom: none">Cart Totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tbody>
                                        <tr class="order-total">
                                        <th>Total</th>
                                        <td data-title="Total">
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
                                    </tbody>
                                </table>
                                <!-- .shop_table shop_table_responsive -->
                                <div class="wc-proceed-to-checkout">
                                    <a class="checkout-button button alt wc-forward" href="{{route("website.checkout")}}">
                                        Proceed to checkout</a>
                                    <a class="back-to-shopping" href="">Back to Shopping</a>
                                </div>
                                <!-- .wc-proceed-to-checkout -->
                            </div>
                            <!-- .cart_totals -->
                        </div>
                        <!-- .cart-collaterals -->
                    </div>

                    <!-- .cart-wrapper -->
                    @endif
                </div>
                <!-- .woocommerce -->
            </div>
            <!-- .entry-content -->
        </div>
        <!-- .hentry -->
    </main>
    <!-- #main -->
</div>