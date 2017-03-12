@extends('layouts.resortOwnerLayout')

@section('title')
  Resort Owner Dashboard
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:30px">
  <div>
    <div class="r-title">
      <div class="col-sm-6 deck" >
        <div class="resort-name">
          Balinese Villa
        </div>
        <div class="resort-address">
          <p class="r-p"> Calamba, Calabarzon, Philippines</p>
        </div>
      </div>
      <div class="col-sm-6 deck" >
        <p class="r-p"><span class="r-rating">  <img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"><img src="assets/images/duck.png" alt="" width="22px"></span></p>
        <p class="r-p"><span class="r-review">Based on 3 reviews</span></p>
      </div>
      <div class="dashboard-header-name">
      </div>
    </div>
  </div>
  <div class="col-sm-4 dashboard-header">
    <div class="col-xs-12" style="color: white;
    background: #2196F3;">
      <i class="fa fa-eye icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    12,121
    </div>
        No. of Visit
    </div></center>
    <div class="col-xs-12" style="color: white;
    background: #1E88E5;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </div>
  <!-- First -->
  <div class="col-sm-4 dashboard-header">
    <div class="col-xs-12" style="color: white;
    background: #673AB7;">
      <i class="fa fa-check-square-o icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    3,500
    </div>
        No. of Bookings
    </div></center>
    <div class="col-xs-12" style="color: white;
    background: #5E35B1;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </div>
  <!-- Second -->

  <div class="col-sm-4 dashboard-header">
      <center>
    <div class="col-xs-12" style="color: white;
    background: #3F51B5;">
      <i class="fa fa-money icon-dashboard" aria-hidden="true" style="color:white;"></i>
  <center>  <div class="dashboard-number">
    P 1,500
    </div>
        Total Earnings
    </div></center>
    <div class="col-xs-12" style="color: white;
    background: #3949AB;margin-bottom:20px;">
        <center><h6>Click to learn more</h6></center>
    </div>
  </center>
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
        <div class="" >
        <div class="dashboard-header-name" >
          Yearly Sales
        </div>
        <div class="x_panel" style="width:100%;border-color:white;">
          <canvas id="myLineChart" ></canvas>
        </div>
      </div>
      </div>
      <div class="col-md-5 col-sm-12 col-xs-12 " >
        <div>
          <div class="dashboard-header-name">
            What's Happening Today
          </div>
          <div class="sidebar-today">
            <i class="fa fa-users" aria-hidden="true"></i> 15 guest will arive at the resort today.
          </div>
          <div class="sidebar-today">
            <i class="fa fa-calendar-check-o" aria-hidden="true"></i> 2 Reservation Today
          </div>
          <div class="sidebar-today">
            <i class="fa fa-check" aria-hidden="true"></i> 3 Latest Guest Review
          </div>
        </div>
        <div class="col-xs-12" style="padding-left:0px;padding-right:0px;">
          <style>
          .cld-days{
            width: 102%;
          }
          .cld-day{
            display: table-cell;
            float: left;
            position: relative;
              margin:-2px 0 0 0px;
            padding: 5px;
            height: 50px;
            overflow-y: auto;
            /*background-image: url("../images/cal.png");*/
           background-size: 100px 100px;
            border: 1px solid #90caf9;
          }
          .cld-labels,.cld-datetime{
            padding:0px;
          }
          .cld-datetime .today{
            font-size: 20px;
            font-weight: bold;
          }
          </style>
          <div >
            <div class="dashboard-header-name">
                Reservations
            </div>
            <center>
              <div id="calendar" style="padding-bottom:20px;">
              </div>
            </center>
            </div>

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
