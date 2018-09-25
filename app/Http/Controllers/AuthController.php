<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{

	public function changePassword(Request $request){
		$input = $request->all();
		$rules = [
			'password'	=> 'required|confirmed'
		];
		$valdation = Validator::make($input, $rules);
		if($valdation->fails()){
			return redirect()->back()->withInput()->withErrors($valdation);
		}

		return 'done';
	}

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
