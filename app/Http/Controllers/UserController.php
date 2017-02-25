<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Notifications\SendConfirmationEmail;
use Auth;
use App\Role;
use App\Phone;
use Hash;
use Mail;
use Validator;
use Session;

class UserController extends Controller
{
      public function store(Request $requests){
        $username = $requests->username;
        $password = $requests->password;

        $attempt = Auth::attempt([
            'username' => $requests->username,
            'password' => $requests->password,
          ]);

          return redirect('login');
      }
      public function signUp(){
        return view('users.signUp');
      }
      public function signUpProcess(Request $requests){

        $data = array( 'email' => 'jeysownlopez@gmail.com' ,'name'=>'Lala', 'username' => $requests->username, 'password' => $requests->password , 'from' => 'dazzlingturbo@gmail.com', 'from_name' => 'JuanOuting');

         Mail::send('email.confirmationEmail',['name'=> $data['name'],'username'=>$data['username'],'password'=>$data['password']],function($message) use($data){
           $message->to($data['email'],$data['name'])->from( $data['from'], $data['from_name'] )->subject('Hello Someone');
         });

         $createAccount = new User;
         $createAccount->username = $requests->username;
         $createAccount->password = Hash::make($requests->password);
         $createAccount->email = $requests->email;
         $createAccount->profile_path = 'assets/images/user.png';
         $createAccount->save();

        Session::flash('flash_message','success');

        return redirect('login');
      }
      public function getMyPhone(){
        $country = User::find(4)->country;
        echo $country->name;
      }
      public function profile(){
        return view('resortsOwners.editprofile');
      }
      public function editProfile(){

      }
      public function login(){
        if(Auth::check()){
          if(Auth::user()->username == 'glenwin'){
            return view('resortsOwners.dashboard');
          }
          return view('users.dashboard');
        }
        else{
          return view('auth.login');
        }
      }
      public function logout(Request $requests){
        Auth::logout();
        return redirect('login');
      }

}
