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
                            <li class="breadcrumb-item"><a href="javascript.void(0)">Banners</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Banner
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
                                <h4 class="card-title" id="striped-row-layout-basic">Edit Banner</h4>
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
                                    <form class="form form-horizontal striped-rows form-bordered" action="{{route("updatebanner",$banners['id'])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-name"> Name</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="product-name"
                                                            class="form-control"
                                                            placeholder="Name"
                                                            name="banner-name"
                                                            required
                                                            value="{{$banners["name"]}}"
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('banner-name'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('banner-name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="product-code">Tag Line</label>
                                                <div class="col-md-9">
                                                    <input
                                                            type="text"
                                                            id="tag-line"
                                                            class="form-control"
                                                            placeholder="Tag Line"
                                                            name="tag-line"
                                                            required
                                                            value="{{$banners["tag_line"]}}"
                                                    >
                                                    <p class="help-block danger">
                                                        @if ($errors->has('tag-line'))
                                                            <span class="col" role="alert">
                                                            <strong>{{ $errors->first('tag-line') }}</strong>
                                                        </span>
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                            <br/>
                                            <div class="card-text">
                                                @if($banners["id"]==1 ||$banners["id"] == 4)
                                                    <p>Image size should be <code> 566 px x 566 px</code>. Otherwise image will not upload</p>
                                                @else
                                                    <p>Image size should be <code> 570 px x 273 px</code>. Otherwise image will not upload</p>
                                                @endif
                                            </div>
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="projectinput9">Product Image</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" id="file" name="banner-image">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                                <p class="help-block danger">
                                                    @if ($errors->has('banner-image'))
                                                        <span class="col" role="alert">
                                                            <strong>{{ $errors->first('banner-image') }}</strong>
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
                                                <i class="la la-check-square-o"></i> Update
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