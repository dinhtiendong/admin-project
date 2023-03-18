<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        return view('home');
    }
    
    public function login(Request $request){
    	$array = array(
            'list' => "GJDLSGJD"
        );
        return response()->json($array, 200);
    }
}