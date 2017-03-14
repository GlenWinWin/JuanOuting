@extends('layouts.resortOwnerLayout')

@section('title')
  Payment List
@stop

@section('body-content')
<div class="col-lg-9 body-container" style="margin-top:15px">
  <div class="r-title">
    <div class="col-sm-12 deck" >
      <div class="resort-name">
        Number of Bookings
        <a href="download_csv_payment" class="btn btn-success" style="float:right;text-align:center;">Dowload <i class="fa fa-download" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="dashboard-header-name">
    </div>
  </div>

  <table class="table table-bordered table-hover">
    <tr>
      <th>Name</th>
      <th>Amount</th>
      <th>Date of Payment</th>
      <th>Mode of Payment</th>
    </tr>
    @foreach ($payments as $payment)
    <tr>
      <td>{{ $payment->name }}</td>
      <td>₱{{ $payment->amount }}</td>
      <td>{{ $payment->date }}</td>
      <td>{{ $payment->mode }}</td>
    <tr>
    @endforeach

  </table>

</div>
@stop
