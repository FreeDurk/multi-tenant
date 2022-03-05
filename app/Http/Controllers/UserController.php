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

	public function login(){
		$email = 'gaylord15@example.org';
		$password = 'password';

		if(Auth::attempt(['email' => $email, 'password' => $password])){
			return 'okkkkkk';
		}else{
			return 'not ok';
		}
	}

}
