@extends('layouts.resortOwnerLayout')

@section('title')
  PDF Users
@stop

@section('body-content')
<div class="col-lg-9" style="margin-top:25px">
    <table class="table table-bordered">
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>
    <a href="{{ route('pdfview',['download'=>'pdf']) }}" class="btn btn-primary">Download PDF</a>
</div>
@stop
