<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index(){
		return response()->json(User::all());
	}

	public function login(Request $request){
		$email = 'clementina27@example.org';
		$password = 'password';

		if(Auth::attempt(['email' => $email, 'password' => $password])){
			$token = $request->user()->createToken('test');
			return ['token' => $token->plainTextToken];
		}else{
			return 'not ok';
		}
	}

}
