<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/User;

class WebController extends Controller
{
    //
    public function index(){
   	 $User = User::all();
    	 return view('User',['User' => $User]);
   }
}
