<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Completed Orders</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route("allOrder")}}">Orders</a>
                            </li>
                            <li class="breadcrumb-item active">Completed Orders
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="bootstrap3">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <table class="table table-striped table-bordered bootstrap-3">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Invoice #</th>
                                            <th>Customer Name</th>
                                            <th>Shipping City</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($newOrders as $indexkey=>$new)
                                            <tr>
                                                <td>{{$indexkey+1}}</td>
                                                <td><a href="{{route("invoice",$new['id'])}}">INV-{{$new['order_no']}}</a></td>
                                                <td>{{$new['name']}}</td>
                                                <td>{{$new['city']}}</td>
                                                <td>Rs: {{$new['billing_total']}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Completed</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Invoice #</th>
                                            <th>Customer Name</th>
                                            <th>Shipping City</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>