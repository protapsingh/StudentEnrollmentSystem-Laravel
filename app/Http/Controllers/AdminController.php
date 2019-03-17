<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
session_start();

class AdminController extends Controller
{
	//admin login part
     protected function admin_login(Request $Request)
	{
		
	     //return view('dashboard');
		$email=$Request->email;
		$password=$Request->password;
		$result=DB::Table('admins')
		->where('email',$email)
		->where('password',$password)
		->first();

		if($result)
		{
			session::put('email',$result->email);
			session::put('id',$result->id);
			return view('dashboard');
		}
		else
		{
			 return Redirect::to('/admin')->with('failure','Invalid Email or Password!');
		}
			
			
		} 

       //logout part
		protected function logout()
		{

          session::put('email',null);
		  session::put('id',null);
		  return Redirect::to('/admin')->with('failure','Logout Successfully!');

			
		}
}
