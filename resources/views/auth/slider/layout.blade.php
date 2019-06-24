<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Slider</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="striped-row-form-layouts">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" id="striped-row-layout-basic">Add Slider Image</h4>
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
                                        @if ($errors->has('slider-img'))
                                        <div class="alert alert-icon-right alert-danger alert-dismissible mb-2" role="alert">
                                            <span class="alert-icon"><i class="la la-info"></i></span>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <strong>{{ $errors->first('slider-img') }}</strong>
                                        </div>
                                        @endif
                                    </div>
                                    <form class="form form-horizontal striped-rows form-bordered" action="{{route("slider.add")}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="card-text">
                                                <p>Image size should be <code>1920 pixels x 768 pixels</code>. Otherwise image will not upload</p>
                                            </div>
                                            <div class="form-group row last">
                                                <label class="col-md-3 label-control" for="projectinput9">Product Image</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input type="file" id="file" name="slider-img">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="la  la-cloud-upload"></i> Upload
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row match-height">
                    @foreach($slider as $indexKey=>$products)
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <img class="card-img-top img-fluid" src="{{asset("images/website/sliders/".$products["bg-img"])}}" alt="{{$products["title"]}}">
                                <div class="card-body">
                                    <h4 class="card-title"><b>Slide Unique ID</b> <br/>{{$products["title"]}}</h4>
                                    <form method="post" action='{{route( 'slider.destroy', $products['id'])}}'>
                                        @csrf
                                        {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</div>