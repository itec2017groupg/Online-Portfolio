<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
class LoginController extends Controller
{
  public function getLogin()
  {
    return view('login');
  }
  public function postLogin(Request $request){
    $rules=[
      'email'=>'required|email',
      'password' => 'required|min:8'
    ];
    $validator = Validator::make($request->all(),$rules);

    if($validator->fails()){
      return redirect()->back()->withErrors($validator);
    } else {
      $email = $request->input('email');
      $password = $request->input('password');

      if(Auth::attempt(['email' =>$email, 'password'=>$password])){
        return redirect()->intended('/');
      } else {
        return redirect()->back();
      }

    }
  }
}
