<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Resort;

class ResortController extends Controller
{
    public function autocompleteResort(Request $request){
        $term = $request->term;
      	$results = array();
      	$searchResorts = Resort::where('name','LIKE','%'.$term.'%')->get();
      	foreach ($searchResorts as $resorts)
      	{
      	    $results[] = ['value'=>$resorts->name];
      	}
        echo json_encode($results);
    }
    public function filterSearch(Request $requests){
      $resortName = $requests->resortName;
      $reservationType = $requests->reservationType;
      $checkIn = $requests->fromDate;
      $checkOut = $requests->toDate;
      $pax = $requests->pax;
      echo 'Resort Name:' . '<b>'.$resortName.'</b>'.'<br><br>';
      echo 'Reservation Type:' . '<b>'.$reservationType.'</b>'.'<br><br>';
      echo 'Check In:' .'<b>'.$checkIn.'</b>'.'<br><br>';
      echo 'Check Out:' .'<b>'. $checkOut.'</b>'.'<br><br>';
      echo 'Pax:' . '<b>'.$pax.'</b>';


    }
    public function home(){
      return redirect('login');
    }
    public function reservationLists(){
      return view('resortsOwners.calendarOfReservations');
    }
    public function paymentLists(){
      return view('resortsOwners.paymentList');
    }
}
