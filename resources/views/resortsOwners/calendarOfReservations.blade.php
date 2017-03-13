@extends('layouts.resortOwnerLayout')

@section('title')
  Calendar of Reservations
@stop

@section('body-content')
<div class="col-lg-9 body-container" style="margin-top:15px">
  <h1>List of Reservations</h1>
  <div class="col-lg-12">
<center>
    <div id="calendar">
    </div>
</center>
  </div>
</div>
@stop
