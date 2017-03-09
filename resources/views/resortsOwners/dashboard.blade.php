@extends('layouts.resortOwnerLayout')

@section('title')
  Resort Owner Dashboard
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <center>
    <div class="row">
      <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myPieChart" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myBarChart" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="x_panel" style="width:70%;border-color:white;">
          <canvas id="myLineChart" width="400" height="400"></canvas>
        </div>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12">
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
      </div>
    </div>
    <div id="app">
      <users></users>
    </div>
    <template id="users-template">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>Encrypted Password</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users">
            <td>@{{ user.id }}</td>
            <td>@{{ user.username }}</td>
            <td>Password</td>
            <td>@{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
    </template>
  </center>
</div>
@stop
@section('graphs')
<script type="text/javascript" src="assets/js/charts.js"></script>
@stop
