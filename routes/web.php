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
use App\Dump;
use App\Mail\SendConfirmationEmail;
use App\Events\ChatEvent;

Route::get('pdfview',array('as'=>'pdfview','uses'=>'PdfController@pdfview'));

Route::get('send_sms',function(){
  return 'Sent';
});
Route::get('download_csv_payment',function(){
        $paymentzz = Dump::all();

        $csv = \League\Csv\Writer::createFromFileObject(new \SplTempFileObject());

        $csv->insertOne(['name', 'amount', 'date', 'mode']);

        foreach ($paymentzz as $person) {
            $csv->insertOne($person->toArray());
        }

        $csv->output('list_of_payments.csv');

});

Route::get('bridge', function() {
    $pusher = App::make('pusher');

    $pusher->trigger( 'test-channel',
                      'test-event',
                      array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

    return view('resortsOwners.inquiries');
});

Route::get('/pusher', function() {
    event(new ChatEvent('Hi there Pusher!'));
    return "Event has been sent!";
});
Route::get('trip',function(){
  return view('trip');
});
Route::get('get_all_users',function(){
  return view('temp');
});
Route::get('downloadPaymentAsCSV', function()
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
Route::get('analytics',[
  'uses' => 'ResortController@analytics'
]);
Route::get('monitor_reservations',[
  'uses' => 'ResortController@reservationLists'
]);
Route::get('monitor_payments',[
  'uses' => 'ResortController@paymentLists'
]);
Route::get('inquiries',[
  'uses' => 'ResortController@inquiries'
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
