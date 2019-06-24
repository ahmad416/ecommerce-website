<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Add Product</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route("home")}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="javascript.void(0)">Products</a>
                            </li>
                            <li class="breadcrumb-item active"><a href="{{route('addProduct')}}">Add New Product</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Striped row layout section start -->
            <section id="striped-row-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="striped-row-layout-basic">Add Product</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collpase show">
                                <div class="card-body">
                                    <div class="card-text">

                                    </div>
                                    <form class="form form-horizontal striped-rows form-bordered" action="{{route("addnewProduct")}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section"><i class="ft-user"></i> Product Information</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-name">Product Name</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="product-name"
                                                            class="form-control"
                                                            placeholder="Product Name"
                                                            name="product-name"
                                                            required
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-name'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-code">Product Code</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="product-code"
                                                            class="form-control"
                                                            placeholder="Product Code"
                                                            name="product-code"
                                                            required
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-code'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-code') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-color">Product Color</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="product-color"
                                                            class="form-control"
                                                            placeholder="Product Color"
                                                            name="product-color"
                                                            required
                                                    >
                                                    <p class="help-block">
                                                        @if ($errors->has('product-color'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-color') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="product-quantity">Product Quantity</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="number"
                                                            id="product-quantity"
                                                            class="form-control"
                                                            placeholder="Product Quantity"
                                                            name="product-quantity"
                                                            required
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-quantity'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-quantitiy') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="la la-money"></i>Price Information</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-price">Regular Price</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rs</span>
                                                        </div>
                                                        <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder="Product Price"
                                                                name="product-price"
                                                                required
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">.00</span>
                                                        </div>

                                                    </div>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-price'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-price') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="sale-price">Sale Price (if any)</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rs</span>
                                                        </div>
                                                        <input
                                                                type="number"
                                                                class="form-control"
                                                                placeholder="Product Price" aria-label="Amount (to the nearest dollar)"
                                                                name="sale-price">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="la la-clipboard"></i>Product Description</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="short-desc">Short Description</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="short-desc"
                                                            class="form-control"
                                                            placeholder="Short Description"
                                                            name="small-desc"
                                                            required
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('small-desc'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('small-desc') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="lg-desc">Long Description</label>
                                                <div class="col-md-9">
                                                    <textarea
                                                            id="lg-desc"
                                                            rows="5"
                                                            class="form-control"
                                                            name="large-desc"
                                                            placeholder="Long Description"
                                                    ></textarea>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('large-desc'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('large-desc') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="la la-clipboard"></i>Miscellaneous</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="series">Series</label>
                                                <div class="col-md-9">
                                                    <select id="series" name="product-series" class="form-control" required>
                                                        <option value="" selected disabled>Select Series</option>
                                                        @foreach( $series as $serie)
                                                            <option value="{{$serie['id']}}" name="">{{$serie['series_name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-series'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-series') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="catagory">Catagory</label>
                                                <div class="col-md-9">
                                                    <select id="catagory" name="product-catagory" class="form-control">
                                                        <option value="" selected="" disabled="">Select Catagory</option>
                                                        @foreach( $catagory as $catagories)
                                                            <option value="{{$catagories['id']}}">{{$catagories['catagory_name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-catagory'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-catagory') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="subcatagory">Subcatagory</label>
                                                <div class="col-md-9">
                                                    <select id="subcatagory" name="product-subcatagory" class="form-control">
                                                        <option value="none" selected="" disabled="">Select Subcatagory</option>
                                                        @foreach( $subcatagory as $sub)
                                                            <option value="{{$sub['id']}}">{{$sub['subcatagory-name']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-subcatagory'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-subcatagory') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="variety">Variety</label>
                                                <div class="col-md-9">
                                                    <select id="variety" name="product-variety" class="form-control">
                                                        <option value="none" selected="" disabled="">Select Variety</option>
                                                        @foreach( $variety as $varieties)
                                                            <option value="{{$varieties['id']}}">{{$varieties['variety']}}</option>
                                                        @endforeach
                                                    </select>
                                                    <p class="help-block danger">
                                                        @if ($errors->has('product-variety'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-variety') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <h4 class="form-section"><i class="la la-image"></i>Product Image</h4>
                                            <div class="card-text">
                                                <p>Image size should be <code>4000 pixels x 4000 pixels</code>. Otherwise image will not upload</p>
                                            </div>
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="projectinput9">Product Image</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" id="file" name="product-image">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                                <p class="help-block danger">
                                                    @if ($errors->has('product-image'))
                                                        <span class="col" role="alert">
                                                            <strong>{{ $errors->first('product-image') }}</strong>
                                                        </span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="button" class="btn btn-warning mr-1">
                                                <i class="ft-x"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la la-check-square-o"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Striped row layout section end -->
        </div>
    </div>
</div>