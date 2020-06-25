<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function storeSignup(Request $request){
    	$exists=\App\User::where('email',$request->get('email'))->exists();
    	if($exists==true){
    		$message="User already exists";
        	return redirect()->back()->with('message',$message);
    	}
    	if($exists==false){
    		$user=new \App\User;
    		$user->name=$request->get('name');
    		$user->email=$request->get('email');
    		$user->password=$request->get('password');
    		$user->save();
    		Auth::login($user,true);
    		$message="User created Successfully";
        	return redirect()->to('/');

    	}
    }
    public function storeSignin(Request $request){

    	$exists=\App\User::where('email',$request->get('email'))->where('password',$request->get('password'))->exists();

    	if($exists==false){
    		$message="User does not exists";
        	return redirect()->back()->with('message',$message);
    	}
    	if($exists==true){
    		$user=\App\User::where('email',$request->get('email'))->where('password',$request->get('password'))->first();
    		Auth::login($user,true);
    		$message="User Logged In Successfully";
        	return redirect()->to('/');
    	}
    }
    public function logout(){
    	Auth::logout();
    	$message="Logged Out Successfully";
        return redirect()->back()->with('message',$message);

    }
}
