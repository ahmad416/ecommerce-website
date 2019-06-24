@if($newOrders->count() == 0)
@else
<div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Pending Orders</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                        <tr>
                            <th class="border-top-0">Invoice#</th>
                            <th class="border-top-0">Customer Name</th>
                            <th class="border-top-0">Shipping City</th>
                            <th class="border-top-0">Phone Number</th>
                            <th class="border-top-0">Amount</th>
                            <th class="border-top-0">Order Date & Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($newOrders as $newOrder)
                        <tr>
                            <td class="text-truncate"><a href="{{route("invoice",$newOrder["id"])}}">INV-{{$newOrder["order_no"]}}</a></td>
                            <td class="text-truncate">{{$newOrder["name"]}}</td>
                            <td class="text-truncate">{{$newOrder["city"]}}</td>
                            <td class="text-truncate">{{$newOrder["phone"]}}</td>
                            <td class="text-truncate"> Rs {{$newOrder["billing_total"]}}</td>
                            <td class="text-truncate">
                                {{
                                    $date=\Carbon\Carbon::parse($newOrder["created_at"])->format("m/d/Y, h:i:sa")
                                }}
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif