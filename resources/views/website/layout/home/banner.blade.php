<div class="banners techmarket-banner techmarket-grid-banner-1">
    <div class="row">
        <div class="banner large-banner text-in-center">
            <a href="{{route("summer.single")}}">
                <div style="background-size: cover; background-position: center center; background-image: url({{asset("images/website/banners/".$summer["banner_image"])}}); height: 546px;" class="banner-bg">
                    <div class="caption">
                        <div class="banner-info">
                            <h3 class="title">{{$summer["name"]}}</h3>
                            <h4 class="subtitle">{{$summer["tag_line"]}}</h4>
                        </div>
                        <!-- .banner-info -->
                    </div>
                    <!-- .caption -->
                </div>
                <!-- .banner-bg -->
            </a>
        </div>
        <!-- .banner -->
        <div class="banner small-banner text-in-center">
            <a href="{{route("men.single")}}">
                <div style="background-size: cover; background-position: center center; background-image: url( {{asset("images/website/banners/".$men["banner_image"])}} ); height: 262px;" class="banner-bg">
                    <div class="caption">
                        <div class="banner-info">
                            <h3 class="title">{{$men["name"]}}</h3>
                            <h4 class="subtitle">{{$men["tag_line"]}}</h4>
                        </div>
                        <!-- .banner-info -->
                    </div>
                    <!-- .caption -->
                </div>
                <!-- .banner-bg -->
            </a>
        </div>
        <!-- .banner -->
        <div class="banner small-banner text-in-center">
            <a href="{{route("women.single")}}">
                <div style="background-size: cover; background-position: center center; background-image: url({{asset("images/website/banners/".$women["banner_image"])}}); height: 262px;" class="banner-bg">
                    <div class="caption">
                        <div class="banner-info">
                            <h3 class="title">{{$women["name"]}}</h3>
                            <h4 class="subtitle">{{$women["tag_line"]}}</h4>
                        </div>
                        <!-- .banner-info -->
                    </div>
                    <!-- .caption -->
                </div>
                <!-- .banner-bg -->
            </a>
        </div>
        <!-- .banner -->
        <div class="banner large-banner text-in-center">
            <a href="{{route("winter.single")}}">
                <div style="background-size: cover; background-position: center center; background-image: url({{asset("images/website/banners/".$winter["banner_image"])}} ); height: 546px;" class="banner-bg">
                    <div class="caption">
                        <div class="banner-info">
                            <h3 class="title">{{$winter["name"]}}</h3>
                            <h4 class="subtitle">{{$winter["tag_line"]}}</h4>
                        </div>
                        <!-- .banner-info -->
                    </div>
                    <!-- .caption -->
                </div>
                <!-- .banner-bg -->
            </a>
        </div>
        <!-- .banner -->
    </div>
    <!-- .row -->
</div>
<!-- .banners -->