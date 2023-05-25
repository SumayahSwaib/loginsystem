<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function login(){
        return view('login');
      }
      public function check(request $request){
$credentials = $request->validate([
'email' => ['required','email'],
'password' =>['required']
]);

if(Auth::attempt($credentials)){
  return view('thanks');

}
return "<h2> username or password invalid</h2> ";

      }
}
