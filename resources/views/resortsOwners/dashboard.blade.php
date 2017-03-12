@extends('layouts.resortOwnerLayout')

@section('title')
  Resort Owner Dashboard
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <div class="col-sm-4 dashboard-header">
    <div class="col-xs-10" style="color: white;
    background: #2196F3;">
      <i class="fa fa-eye icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    12,121
    </div>
        No. of Resort Visit
    </div></center>
    <div class="col-xs-10" style="color: white;
    background: #1E88E5;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </div>
  <!-- First -->
  <div class="col-sm-4 dashboard-header" style="margin-bottom:20px;">
    <div class="col-xs-10" style="color: white;
    background: #673AB7;">
      <i class="fa fa-check-square-o icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    3,500
    </div>
        No. of Bookings
    </div></center>
    <div class="col-xs-10" style="color: white;
    background: #5E35B1;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </div>
  <!-- Second -->
  <div class="col-sm-4 dashboard-header" style="margin-bottom:20px;">
    <div class="col-xs-10" style="color: white;
    background: #3F51B5;">
      <i class="fa fa-money icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    P 1,500
    </div>
        Total Earnings
    </div></center>
    <div class="col-xs-10" style="color: white;
    background: #3949AB;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </div>
  <!-- Third -->

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
      <div class="col-md-7 col-sm-12 col-xs-12" >
        <div class="" style="background:#fbfbfb">

        <div class="dashboard-header-name" >
          Yearly Sales
        </div>
        <div class="x_panel" style="width:100%;border-color:white;">
          <canvas id="myLineChart" style="background:#fbfbfb"></canvas>
        </div>

      </div>
      </div>
      <div class="col-md-5 col-sm-12 col-xs-12 " style="background:#fbfbfb">
        <div class="dashboard-header-name">
          What's Happening Today
        </div>
        <div class="sidebar-today">
          <b>15</b> guest will arive at the resort today.
        </div>
        <div class="sidebar-today">
          <b>2</b> Reservation Today
        </div>
        <div class="sidebar-today">
          <b>3</b> Latest Guest Review
        </div>
        <div class="col-xs-12" style="padding-left:0px;padding-right:0px;">
          <img src="assets/images/calendar.jpg" alt="" style="width:100%">
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
