@extends("auth._includes.master")
@section("title","Kamalia Khaddi - Dashboard")
@section("body-class","vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar")
@section("data-open","click")
@section("data-menu","vertical-menu-modern")
@section("data-col","2-column")
{{--Web Content Start--}}
@section("content")
    @include("auth._includes.topNav")
    @include("auth._includes.sidenav")
    @include("auth.home.homelayout")
@endsection
{{--Page Level Styles--}}
@section("styles")
    <link rel="stylesheet" type="text/css" href="{{asset("admin-v2/fonts/feather/style.css")}}">
    <script type="text/javascript" src="{{asset("admin-v2/js/plugins/chartjs/chart.min.js")}}"></script>
@endsection
{{--Page Level Scripts--}}
@section("scripts")
    <script>
        function getRandomColor() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        function getRandomColorEach(count) {
            var data =[];
            for (var i = 0; i < count; i++) {
                data.push(getRandomColor());
            }
            return data;
        }
        var countries = {!! json_encode($country) !!};

        var ctx = document.getElementById('top-country').getContext('2d');
        var chart = new Chart(ctx, {

            type: 'doughnut',
            data: {
                labels: {!! json_encode($country) !!},
                datasets: [{
                    label: "Countries",
                    backgroundColor: getRandomColorEach(countries.length),
                    data: {!! json_encode($country_sessions) !!},
                }]
            },
            options: {
                responsive: true
            }
        });
        /*Top Browsers Data*/
        var browsers = {!! json_encode($browser_name) !!};

        var browser_id = document.getElementById('top-browser').getContext('2d');
        var browserChart = new Chart(browser_id, {

            type: 'doughnut',
            data: {
                labels:{!! json_encode($browser_name) !!},
                datasets: [{
                    label: "Strigy",
                    backgroundColor: getRandomColorEach(countries.length),
                    data: {!! json_encode($browser_session) !!},
                }]
            },
            options: {
                responsive: true
            }
        });

        var linechart = $("#visitorViews");
        var linechartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                }]
            },
            title: {
                display: true,
            }
        };
        var linechartData = {
            labels: {!! json_encode($abcdate) !!},
            datasets: [{
                label: "Visitors",
                data: {!! json_encode($visitors) !!},
                fill: false,
                borderDash: [5, 5],
                borderColor: "#00A5A8",
                pointBorderColor: "#00A5A8",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }, {
                label: "Page Views",
                data: {!! json_encode($pageview) !!},
                lineTension: 0,
                fill: false,
                borderColor: "#FF7D4D",
                pointBorderColor: "#FF7D4D",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }]
        };
        var lineconfig = {
            type: 'line',
            options : linechartOptions,
            data : linechartData
        };
        var lineChart = new Chart(linechart, lineconfig);

    </script>
@endsection