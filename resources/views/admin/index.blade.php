@extends('layouts.admin')
@section('title')
Admin Dashboard | SCMS
@endsection
@section('content')
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $data['count_post'] }}</h2>
                    <div class="m-b-5">Posts </div><i class="fa fa-book widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-info color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $data['count_page'] }}</h2>
                    <div class="m-b-5">Pages</div><i class="fa fa-file widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-warning color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{ $data['count_user'] }}</h2>
                    <div class="m-b-5">{{ __('Users') }}</div><i class="fa fa-users widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">@php echo date("Y-m-d") @endphp</h2>
                    <div class="m-b-5">Date</div><i class="fa fa-calendar widget-stat-icon"></i>
                    <div><i class="fa fa-level-up m-r-5"></i><small>-{{ __(date("l")) }}</small></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row">

        <div class="col-lg-12">
            <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">

                </p>
            </figure>
        </div>
    </div> -->

    <style>
        .visitors-table tbody tr td:last-child {
            display: flex;
            align-items: center;
        }

        .visitors-table .progress {
            flex: 1;
        }

        .visitors-table .progress-parcent {
            text-align: right;
            margin-left: 10px;
        }
    </style>

</div>
@endsection

@section('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script>
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: <?php echo json_encode($data['setting']['site_name'], JSON_NUMERIC_CHECK); ?>,
        },
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}: <b>{point.percentage:.1f}%</span><br>',
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                    name: 'Program Packages',
                    y: <?php echo json_encode($data['program'], JSON_NUMERIC_CHECK); ?>,
                    selected: true
                }, {
                    name: 'What Do We Offer',
                    y: <?php echo json_encode($data['offer'], JSON_NUMERIC_CHECK); ?>,
                    selected: true
                }, 
                {
                    name: 'Testimonials',
                    y: <?php echo json_encode($data['program'], JSON_NUMERIC_CHECK); ?>,
                    selected: true
                },
            ]
        }]
    });
</script>
@endsection