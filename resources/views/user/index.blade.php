@extends('layouts.user')
@section('title')
Admin Dashboard | Loan Management 
@endsection
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="ibox bg-success color-white widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">201</h2>
                <div class="m-b-5">कर्जमाग फारम</div><i class="ti-shopping-cart widget-stat-icon"></i>
                <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="ibox bg-info color-white widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">1250</h2>
                <div class="m-b-5">खाता</div><i class="ti-bar-chart widget-stat-icon"></i>
                <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="ibox bg-warning color-white widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">$1570</h2>
                <div class="m-b-5">TOTAL INCOME</div><i class="fa fa-money widget-stat-icon"></i>
                <div><i class="fa fa-level-up m-r-5"></i><small>22% higher</small></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="ibox bg-danger color-white widget-stat">
            <div class="ibox-body">
                <h2 class="m-b-5 font-strong">@php echo date("Y-m-d") @endphp</h2>
                <div class="m-b-5">Date</div><i class="ti-user widget-stat-icon"></i>
                <div><i class="fa fa-level-down m-r-5"></i><small>-{{ __(date("l")) }}</small></div>
            </div>
        </div>
    </div>
</div>

@endsection