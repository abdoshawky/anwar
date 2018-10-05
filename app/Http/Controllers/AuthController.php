<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;

class AuthController extends Controller
{

	public function password(Request $request){
		return view('password');
	}

	public function changePassword(Request $request){
		$input = $request->all();
		$rules = [
			'old_password'	=> 'required',
			'new_password'	=> 'required|confirmed'
		];
		$valdation = Validator::make($input, $rules);
		if($valdation->fails()){
			return redirect()->back()->withInput()->withErrors($valdation);
		}

		if(!Hash::check($input['old_password'], auth()->user()->password)){
			session()->put('error', 'Old password is not correct');
			return redirect()->back();
		}

		auth()->user()->update(['password'=> bcrypt($input['new_password'])]);
		session()->put('success', 'Password changed successfully');
		return redirect()->back();
	}

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
