@extends('layouts.resortOwnerLayout')

@section('title')
  Payment List
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <h1>List of Payments</h1>
  <table class="table table-bordered">
    <tr>
      <th>Column 1</th>
      <th>Column 2</th>
      <th>Column 3</th>
    </tr>
    @for($i = 0;$i < 10;$i++)
    <tr>
      <th>Data {{$i+1}}</th>
      <th>Data {{$i+1}}</th>
      <th>Data {{$i+1}}</th>
    <tr>
    @endfor
  </table>
</div>
@stop
