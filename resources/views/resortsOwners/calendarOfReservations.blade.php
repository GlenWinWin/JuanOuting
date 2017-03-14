@extends('layouts.resortOwnerLayout')

@section('title')
  Calendar of Reservations
@stop

@section('body-content')
<div class="col-lg-9 body-container" style="margin-top:15px">
  <div class="r-title">
    <div class="col-sm-12 deck" >
      <div class="resort-name">
        Reservations
      </div>
    </div>
    <div class="dashboard-header-name">
    </div>
  </div>
  <div class="col-lg-12">
<center>
    <div id="calendar">
    </div>
</center>
  </div>
</div>
@stop
