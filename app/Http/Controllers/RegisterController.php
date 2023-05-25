<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function register(){
        return view('register');
      }

      public function store(request $request){
        $input = $request->all();

            User::create([
                'name'=>$input['name'],
                'email'=>$input['email'],
                'password' => Hash::make($input['password'])
               
            ]);
            return view('thanks');

        
      }
}
