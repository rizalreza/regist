<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function registPage()
    {
    	return view('register');
    }

    public function register(Request $request)
    {
    	try {
		        $user = User::create([
		            'name'  => $request->name,
		            'email'     => $request->email,
		            'password'  => app('hash')->make($request->password),
		            'phone' => $request->phone,
		            'gender' => $request->gender,
		            'birthdate' => $request->birthdate,
		            'nationality' => $request->nationality,
		            'remember_token' => str_random(100),
		        ]);

	    } catch (\Illuminate\Database\QueryException $e) {
	    	 $errorCode = $e->errorInfo[1];
	    	 	// return $errorCode;
	    		if($errorCode == 1062){
	    			return "Duplicate entry exception";
	    		} elseif ($errorCode == 1064) {
	    			return "Not null exception";
	    		} elseif ($errorCode == 1048) {
	    			return "Please fill all form";
	    		} 
	    }

	    return "Success"; 
    }
}
