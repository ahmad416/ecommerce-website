{{--<div class="col-xl-12 col-lg-12">--}}
    {{--<div class="card">--}}
        {{--<div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">--}}
            {{--<a href="#" class="btn bg-info bg-darken-3 mr-1 white">Statistics <i class="ft-bar-chart"></i></a>                      for the last year.--}}
        {{--</div>--}}
        {{--<div class="card-content">--}}
                {{--<div class="col-lg-9 col-md-12">--}}
                    {{--<div class="card-body">--}}
                        {{--<ul class="list-inline text-center">--}}
                            {{--<li class="mr-1">--}}
                                {{--<h6><i class="la la-circle danger"></i>--}}
                                    {{--<span>iOS</span>--}}
                                {{--</h6>--}}
                            {{--</li>--}}
                            {{--<li class="mr-1">--}}
                                {{--<h6><i class="la la-circle warning"></i>--}}
                                    {{--<span>Windows</span>--}}
                                {{--</h6>--}}
                            {{--</li>--}}
                            {{--<li class="mr-1">--}}
                                {{--<h6><i class="la la-circle success"></i>--}}
                                    {{--<span>Android</span>--}}
                                {{--</h6>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<div class="chartjs">--}}
                            {{--<canvas id="line-stacked-area" class="height-350"></canvas>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="heading-labels">Weekly Website Analytics Report</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <span class="badge badge-default badge-info round">Google</span>
                    <span class="badge badge-default badge-info round">Analytics</span>
                    <span class="badge badge-default badge-info round">Report</span>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="chart-stats text-center my-3">
                            <div class="new-users my-2 overflow-hidden clearfix">
                                <span>New Users</span>
                                <h1 class="display-4">{{json_encode($newUsers)}}</h1>
                            </div>
                            <div class="returning-users my-2 overflow-hidden">
                                <span>Returning Users</span>
                                <h1 class="display-4">{{json_encode($returningUsers)}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Weekly Page Views and Visitors</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <canvas id="visitorViews" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Top Browser Used</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <canvas id="top-browser" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Top Countries Visited</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <canvas id="top-country" height="400"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</div>



