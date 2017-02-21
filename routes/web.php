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
