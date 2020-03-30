@extends('layouts.app')

@section('content')

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{ number_format(3456788) }}<sup style="font-size: 20px">USD</sup></h3>
                <p>Paid dollars</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">See <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{ number_format(3456) }}</h3>
                <p>Orders</p>
            </div>

            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>

            <a href="#" class="small-box-footer">See <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ number_format(345) }}</h3>
                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">See <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

@endsection
