<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Login Page.
     * @return View
     */
    public function login( Request $request )
    {
		return view( 'auth.login', [ 
			"page_title" => "Login", 
			"referer" => session('url')["intended"] ?? null
		]);
    }
	
	/**
     * Register Page.
     * @return View
     */
    public function register()
    {
		//dd( session('url')["intended"] );
		return view( 'auth.register', [ 
			"page_title" => "Register", 
			"referer" => session('url')["intended"] ?? null
		]);
    }
	
	/**
     * Perform Registration.
     * @return Auth
     */
    public function registration( Request $request )
    {
		$credentials = $request->except('_token','password1');
		
		$credentials['password'] = Hash::make( $credentials['password'] );
		
		if ( User::create( $credentials ) ) {
            // Authentication passed...
			
			$login = $request->only('email', 'password');
			Auth::attempt( $login );
			
            return redirect( $request->referer );
        } else {
			return back()->with('status', 'Registration Failed !');
		}
    }
	
	/**
     * Perform Authentication.
     * @return Auth
     */
    public function authenticate( Request $request )
    {
		$credentials = $request->only('email', 'password');
		
		if ( Auth::attempt( $credentials ) ) {
            // Authentication passed...
            return redirect( $request->referer );
        } else {
			return back()->with('status', 'Invalid Username or Password !');
		}
    }
	
	/**
     * Logout Action.
     * @return View
     */
    public function logout()
    {
		Auth::logout();
		return redirect()->route('login');
    }
}