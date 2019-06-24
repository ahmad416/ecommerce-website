<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <section class="card">
                <div id="invoice-template" class="card-body">
                    <!-- Invoice Company Details -->
                    <div id="invoice-company-details" class="row">
                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <div class="media">
                                <img src="{{asset("images/website/logos/main-logo.png")}}" alt="company logo" class="" width="150px"
                                />
                                <div class="media-body">
                                    <ul class="ml-2 px-0 list-unstyled">
                                        <li class="text-bold-800"><b>Kamalia Khaddi</b></li>
                                        <li><b>Kamalia</b></li>
                                        <li><b>Phone No:</b> 03327009966</li>
                                        <li><b>Email:</b> info@kamaliakhaddi.com</li>
                                        <li><b>Website:</b> www.kamaliakhaddi.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-right">
                            <h2>INVOICE</h2>
                            <p class="pb-3"># INV-{{$singleOrder["order_no"]}}</p>
                            <ul class="px-0 list-unstyled">
                                <li>Balance Due</li>
                                <li class="lead text-bold-800">Rs: {{$singleOrder["billing_total"]}}</li>
                            </ul>
                        </div>
                    </div>
                    <!--/ Invoice Company Details -->
                    <!-- Invoice Customer Details -->
                    <div id="invoice-customer-details" class="row pt-2">
                        <div class="col-sm-12 text-center text-md-left">
                            <p class="text-muted">Bill To</p>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-left">
                            <ul class="px-0 list-unstyled">
                                <li class="text-bold-800">Mr. {{$singleOrder["name"]}}</li>
                                <li>{{$singleOrder["shipping_address"]}}</li>
                                <li>{{$singleOrder["city"]}}</li>
                                <li>Phone: {{$singleOrder["phone"]}}</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-right">
                            <p>
                                <span class="text-muted">Order Date :</span>
                                {{
                                    $date=\Carbon\Carbon::parse($singleOrder["created_at"])->format("m/d/Y")
                                }}
                            </p>
                        </div>
                    </div>
                    <!--/ Invoice Customer Details -->
                    <!-- Invoice Items Details -->
                    <div id="invoice-items-details" class="pt-2">
                        <div class="row">
                            <div class="table-responsive col-sm-12">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item & Description</th>
                                        <th class="text-right">Rate</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($singleOrder->products()->get() as $product)
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <p>{{$product["product-name"]}}</p>
                                            </td>
                                            <td class="text-right">
                                                @if($product["sale-price"] == NULL )
                                                    Rs: {{$product["product-price"]}}
                                                @else
                                                    Rs: {{$product["sale-price"]}}
                                                @endif
                                            </td>
                                            <td class="text-right">{{$product->pivot->quantity}}</td>
                                            <td class="text-right">
                                                @if($product["sale-price"] == NULL )
                                                    Rs: {{$product["product-price"] * $product->pivot->quantity}}
                                                @else
                                                    Rs: {{$product["sale-price"] * $product->pivot->quantity}}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-sm-12 text-center text-md-left">
                                <p class="lead"></p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-right"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <p class="lead">Total due</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>

                                        <tr>
                                            <td class="text-bold-800">Total</td>
                                            <td class="text-bold-800 text-right"> Rs: {{$singleOrder["billing_total"]}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Footer -->
                    <div id="invoice-footer">
                        <div class="row">
                            <div class="col-md-7 col-sm-12">
                                <h6>Terms & Condition</h6>
                                <p>You know, being a test pilot isn't always the healthiest business
                                    in the world. We predict too much for the next year and yet far
                                    too little for the next 10.</p>
                            </div>
                        </div>
                    </div>
                    <!--/ Invoice Footer -->
                </div>
            </section>
        </div>
    </div>
</div>