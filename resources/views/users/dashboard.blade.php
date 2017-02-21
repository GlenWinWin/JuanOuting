@extends('layouts.customerLayout')

@section('body-content')
  <h1>Hello {{Auth::user()->username}}</h1>

@stop
