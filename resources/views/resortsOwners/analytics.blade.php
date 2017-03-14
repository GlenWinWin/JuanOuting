@extends('layouts.resortOwnerLayout')

@section('title')
  Analytics
@stop

@section('body-content')
<div class="col-lg-9 body-container" style="margin-top:5px;padding-left:0px;padding-right:0px;">
      <div class="tab-wrap">
                      <input type="radio" name="tabs" id="tab1" checked>
                      <div class="tab-label-content" id="tab1-content">
                        <label class="label-header" for="tab1">Bookings</label>
                        <div class="tab-content">
                          <div class="col-sm-7 col-xs-12">

                            <div class="dashboard-header-name" >
                              Number of Bookings by Month
                            </div>
                            <div class="x_panel">
                              <canvas id="myBarChart" ></canvas>
                            </div>
                          </div>
                          <div class="col-sm-5 col-xs-12">
                            <div class="dashboard-header-name" >
                              Distribution of Bookings
                            </div>
                            <div class="x_panel">
                              <canvas id="myPieChart"></canvas>

                            </div>

                            <div class="col-lg-12">

                                      <ul class="legend">
                                        <li><span class="juanderpool"></span> JuanderPool</li>
                                        <li><span class="walkin"></span> Walk-in</li>
                                        <li><span class="direct"></span> Direct</li>
                                    </ul>
                            </div>

                          </div>
                          <div class="col-lg-12">
                            <div class="dashboard-header-name" >
                              Distribution of Bookings
                            </div>
                            <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Firstname</th>
                              <th>Lastname</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td>john@example.com</td>
                            </tr>
                            <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td>mary@example.com</td>
                            </tr>
                            <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td>july@example.com</td>
                            </tr>
                          </tbody>
                        </table>
                          </div>
                        </div>
                      </div>

                      <input type="radio" name="tabs" id="tab2">
                      <div class="tab-label-content" id="tab2-content">
                        <label class="label-header" for="tab2">Revenue</label>
                          <div class="tab-content">
                            <div class="col-sm-7 col-xs-12">

                              <div class="dashboard-header-name" >
                                Revenue by Month
                              </div>
                              <div class="x_panel">
                                <canvas id="myBarChart1" ></canvas>
                              </div>
                            </div>
                            <div class="col-sm-5 col-xs-12">
                              <div class="dashboard-header-name" >
                                Distribution of Revenue
                              </div>
                              <div class="x_panel">
                                <canvas id="myPieChart1"></canvas>

                              </div>

                              <div class="col-lg-12">

                                        <ul class="legend">
                                          <li><span class="juanderpool"></span> JuanderPool</li>
                                          <li><span class="walkin"></span> Walk-in</li>
                                          <li><span class="direct"></span> Direct</li>
                                      </ul>
                              </div>

                            </div>
                            <div class="col-lg-12">
                              <div class="dashboard-header-name" >
                                Distribution of Revenue
                              </div>
                              <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                              </tr>
                              <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                              </tr>
                              <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                              </tr>
                            </tbody>
                          </table>
                            </div>
                          </div>
                      </div>


                      <div class="slide"></div>

                  </div>
  </div>

</div>
@stop
@section('graphs')
<script type="text/javascript" src="assets/js/charts.js"></script>
@stop
