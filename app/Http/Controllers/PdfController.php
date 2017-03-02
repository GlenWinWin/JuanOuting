<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use PDF;

class PdfController extends Controller
{
  public function pdfview(Request $request)
  {

      $users = User::all();
      view()->share('users',$users);

      if($request->has('download')){
          $pdf = PDF::loadView('pdf.trip',['users'=>$users]);
          return $pdf->stream('users.pdf');
      }
      return view('pdf.users');
  }
}
