<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">All Orders</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route("allOrder")}}">Orders</a>
                            </li>
                            <li class="breadcrumb-item active">New Orders
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
                                            <th>Actions</th>
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
                                                    @if($new['status'] == 2)
                                                    <button type="button" class="btn btn-sm btn-outline-success round">Completed</button>
                                                    @elseif($new['status'] == 1)
                                                        <button type="button" class="btn btn-sm btn-outline-warning round">Dispatched</button>
                                                    @else
                                                        <button type="button" class="btn btn-sm btn-outline-danger round">Pending</button>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown float-md-right">
                                                        <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton"
                                                                type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton">
                                                            @if($new["status"] == 0)
                                                                <form action="{{route("dispatched",$new["id"])}}" method="post">
                                                                    @csrf
                                                                    <button class="dropdown-item">
                                                                        <i class="la la-inbox"></i> Dispatched
                                                                    </button>
                                                                </form>
                                                                <form action="{{route("com",$new["id"])}}" method="post">
                                                                    @csrf
                                                                    <button class="dropdown-item" style="cursor: pointer">
                                                                        <i class="la la-check-circle-o"></i> Completed
                                                                    </button>
                                                                </form>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="{{route("invoicePdf", $new["id"])}}">
                                                                    <i class="la la-print"></i> Print Invoice
                                                                </a>
                                                            @elseif($new["status"] == 1)
                                                                <form action="{{route("com",$new["id"])}}" method="post">
                                                                    @csrf
                                                                    <button class="dropdown-item" style="cursor: pointer">
                                                                        <i class="la la-check-circle-o"></i> Completed
                                                                    </button>
                                                                </form>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="{{route("invoicePdf", $new["id"])}}">
                                                                    <i class="la la-print"></i> Print Invoice
                                                                </a>
                                                            @else
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="la la-check-circle-o"></i> Order has been completed.
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="{{route("invoicePdf", $new["id"])}}">
                                                                    <i class="la la-print"></i> Print Invoice
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
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
                                            <th>Status</th>
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