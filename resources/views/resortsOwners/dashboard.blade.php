@extends('layouts.resortOwnerLayout')

@section('title')
  Resort Owner Dashboard
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <div class="col-sm-4 dashboard-header">
    <div class="col-xs-10">
      <i class="fa fa-eye icon-dashboard" aria-hidden="true"></i>
    <div class="dashboard-number">
    12,121
    </div>
    No. of Resort Visit
    </div>
  </div>
  <div class="col-sm-4 dashboard-header">
    <div class="col-xs-10">
        <i class="fa fa-check-square-o icon-dashboard" aria-hidden="true"></i>
        <div class="">
          <div class="dashboard-number">
            3,500
          </div>
          No. of Bookings
        </div>
  </div>
  </div>
  <div class="col-sm-4 dashboard-header">

    <div class="col-xs-10">
      <i class="fa fa-money icon-dashboard" aria-hidden="true"></i>

        <div class="dashboard-number">
          P 1,500
        </div>
        Total Earnings
    </div>
  </div>
      <!-- <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myPieChart" width="400" height="400"></canvas>
        </div>
      </div> -->
      <!-- <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myBarChart" width="400" height="400"></canvas>
        </div>
      </div> -->
      <div class="col-md-8 col-sm-12 col-xs-12" >
        <div class="dashboard-header-name">
          Yearly Sales
        </div>
        <div class="x_panel" style="width:100%;border-color:white;">
          <canvas id="myLineChart"></canvas>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 ">
        <div class="dashboard-header-name">
          What's Happening Today
        </div>
        <div class="sidebar-today">
          <b>0</b> guest will arive at the resort today.
        </div>
        <div class="sidebar-today">
          <b>0</b> Reservation Today
        </div>
        <div class="sidebar-today">
          <b>0</b> Latest Guest Review
        </div>
      </div>
      <!-- <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myRadarChart" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myPolarChart" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myDoughnut" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myBubbleChart" width="400" height="400"></canvas>
        </div>
      </div> -->

</div>
@stop
@section('graphs')
<script type="text/javascript" src="assets/js/charts.js"></script>
@stop
