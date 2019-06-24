<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Banners</h3>
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
            <div class="row match-height">
                @foreach($banners as $banners)
                <div class="col-md-6 col-sm-12">
                    <div class="card text-white bg-primary text-center" style="height: 311.563px;">
                        <div class="card-content">
                            <div class="card-body pt-3">
                                <img src="{{asset("images/website/banners/".$banners["banner_image"])}}" alt="element 01" width="190" class="float-left">
                                <h4 class="card-title mt-3 text-white">{{$banners["name"]}}</h4>
                                <p class="card-text">{{$banners["tag_line"]}}</p>
                                <a class="btn btn-primary btn-darken-3" href="{{route("editBannerForm",$banners['id'])}}">Update Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>