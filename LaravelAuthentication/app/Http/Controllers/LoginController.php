<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function authenticate(){
        if(Auth::attempt(['email' =>$email, 'password' => $password])){
           
            //Authentication passed.....
            return redirect() -> intended('dashboard');
        }
    }

 
}
