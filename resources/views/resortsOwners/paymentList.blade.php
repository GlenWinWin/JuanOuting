@extends('layouts.resortOwnerLayout')

@section('title')
  Payment List
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:15px">
  <h1>List of Payments</h1>
  <a href="download_csv_payment" class="btn btn-success">Dowload <i class="fa fa-download" aria-hidden="true"></i></a>
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
