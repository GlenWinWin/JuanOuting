<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Country;
use App\User;
use App\Mail\SendConfirmationEmail;

Route::get('pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));

Route::get('send_sms',function(){
  $uname = "channellingsystem@gmail.com";
  $pword = "ch4n3ll1ng";
  $info = "1";
  $test = "0";

  $from = "JuanDerPool";
  $number = "639173038184";
  $message = 'HEllo Jason!!';
  $message = urldecode($message);

  $data = "&username=".$uname."&password=".$pword."&message=".$message."&from=".$from."&number=".$number."&info=".$info."&test=".$test;

  $ch = curl_init('http://www.txtlocal.com/sendsmspost.php');
        curl_setopt($ch,CURLOPT, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);

  return 'Sent';
});

Route::get('trip',function(){
  return view('trip');
});
Route::get('get_all_users',function(){
  return view('temp');
});
Route::get('/', function()
{
    Excel::create('Filename', function($excel) {
        $excel->sheet('Sheetname', function($sheet) {
            $users = User::all();
            $sheet->fromModel($users);
        });
    })->download('xls');
});
Route::post('bagong_dp', 'UserController@editProfile');
Route::get('edit_profile',[
  'uses' => 'UserController@profile'
]);
Route::get('resort',[
  'uses' => 'ResortController@autocompleteResort'
]);
Route::get('home',[
  'uses' => 'ResortController@home'
]);
Route::get('monitor_reservations',[
  'uses' => 'ResortController@reservationLists'
]);
Route::get('monitor_payments',[
  'uses' => 'ResortController@paymentLists'
]);
Route::get('login',[
	'uses' => 'UserController@login'
]);
Route::get('logout',[
  'uses' => 'UserController@logout'
]);
Route::get('signUp',[
  'uses' => 'UserController@signUp'
]);
Route::get('phone',[
	'uses' => 'UserController@getMyPhone'
]);
Route::get('/phone/country/{countryId}',function ($countryId){
	$country = Country::findOrFail($countryId);
	echo "<h1>Phone by users in ".$country->name;
	foreach ($country->phones as $p) {
		echo '<li>'.$p->model.'</li>';
	}
});
Route::post('filterProcess', ['uses' => 'ResortController@filterSearch']);
Route::post('signUpProcess', ['uses' => 'UserController@signUpProcess']);

Route::resource('user','UserController',['only' => ['store']]);

//Route::get('user/{id}', 'UserController@show');
