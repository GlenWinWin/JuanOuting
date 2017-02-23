@extends('layouts.resortOwnerLayout')

@section('title')
  Resort Owner Dashboard
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;float:left;">
        <canvas id="myPieChart" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myBarChart" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myLineChart" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myRadarChart" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myPolarChart" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myDoughnut" width="400" height="400"></canvas>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel" style="width:70%;border-color:white;">
        <canvas id="myBubbleChart" width="400" height="400"></canvas>
      </div>
    </div>
  </div>
</div>
@stop
@section('graphs')
<script type="text/javascript" src="assets/js/charts.js"></script>
@stop
