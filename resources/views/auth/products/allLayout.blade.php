<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">All Products</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a>
                            </li>
                            <li class="breadcrumb-item">All Products
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
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $indexkey=>$products)
                                            <tr>
                                                <td>{{$indexkey+1}}</td>
                                                <td>{{$products["product-name"]}}</td>
                                                <td>{{$products["product-code"]}}</td>
                                                <td>
                                                    @if($products["product-quantity"] == 0)
                                                        <button type="button" class="btn btn-sm btn-outline-warning round">Out of Stock</button>
                                                    @else
                                                        <button type="button" class="btn btn-sm btn-outline-success round">In Stock</button>
                                                    @endif
                                                </td>
                                                <td><img src="{{asset("images/product/".$products["product-image"])}}" alt="{{$products["product-name"]}}" width="50" height="50"></td>
                                                <td><a  style="color: green" href="javascript:void(0)"><button type="button" class="btn btn-sm btn-outline-success round" data-toggle="modal"
                                                                                                               data-target="#slideInDown" onclick="showData({{$products['id']}})">View</button></a></td>
                                                <td><a href="{{route("edit.product",$products["id"])}}"><button type="button" class="btn btn-sm btn-outline-warning round">Edit</button></a></td>
                                                <td>
                                                    <form id="deleteProduct" method="post" action='{{route( 'product.destroy', $products['id'])}}'>
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-sm btn-outline-danger round">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include("auth.products.SingleProModal")
        </div>
    </div>
</div>